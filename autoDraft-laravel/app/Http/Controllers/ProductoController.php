<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; 
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller {

    public function storeProductInDatabase(Request $request) {
        // Validation
        $request->validate([
            'nombre' => 'required|min:4|max:75',
            'valor' => 'required|numeric|min:1', // Assuming it cannot be 0
            'descripcion' => 'required|min:4|max:500',
            'imagen' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Store the record in the database
        $producto = new Producto;
        $producto->nombre = $request->input('nombre');
        $producto->valor = $request->input('valor');
        $producto->descripcion = $request->input('descripcion');

        // Handle image upload if a file is provided
        if ($request->hasFile('imagen')) {
            $image = $request->file('imagen');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $producto->imagen = $imageName;
        }

        $producto->save();

        return redirect()->back()->with('success', 'Producto ingresado correctamente.');
    }

    public function getProducts() {
        $productos = DB::table('productos')->get();
        return view('dashboard', ['productos' => $productos]);
    }

    public function destroy($id) {
        $product = Producto::find($id);
        if ($product) {
            $product->delete();
            return response()->json(['success' => 'Product deleted successfully']);
        } else {
            return response()->json(['error' => 'Product not found'], 404);
        }
    }

    // Example controller method
}
