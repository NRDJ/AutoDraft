<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        return view('admin.dashboard', ['productos' => $productos]);
    }

    public function destroy($id) {
        $product = Producto::find($id);
        if ($product) {
            $product->delete();
            return response()->json(['success' => 'Product eliminado exitosamente']);
        } else {
            return response()->json(['error' => 'No se encontró el producto'], 404);
        }
    }

    public function modificar($id) {
        $product = Producto::find($id);
        return view('admin.modificar', ['product' => $product]);
    }

    public function update(Request $request, $id) {

        // Validation
        $request->validate([
            'nombre' => 'required|min:4|max:75',
            'valor' => 'required|numeric|min:1|max:2147483647', // Assuming it cannot be 0
            'descripcion' => 'required|min:4|max:500',
            'imagen' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        $product = Producto::find($id);
        $product->nombre = $request->input('nombre');
        $product->valor = $request->input('valor');
        $product->descripcion = $request->input('descripcion');
    
        // handle the file upload if there is one
        if ($request->hasFile('imagen')) {
            // Delete the old image from the storage
            Storage::delete(public_path('uploads/' . $product->imagen));
    
            // Upload the new image
            $image = $request->file('imagen');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $filename);
    
            // Update the product image
            $product->imagen = $filename;
        }
    
        $product->save();
    
        return redirect()->route('dashboard')->with('success', 'Producto actualizado exitosamente');
    }

    public function showCatalogo() {
        $products = DB::table('productos')->get();
        return view('catalogo', ['products' => $products]);
    }
 
    public function addToCesta($id) {
    
        $producto = Producto::find($id);

        if(!$producto) {
            abort(404);
        }

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "nombre" => $producto->nombre,
                "cantidad" => 1,
                "valor" => $producto->valor,
                "descripcion" => $producto->descripcion,
                "imagen" => $producto->imagen
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    // Example controller method
}
