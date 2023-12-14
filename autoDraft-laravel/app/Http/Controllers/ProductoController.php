<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; // Make sure to import your Product model

class ProductoController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'nombre' => 'required|min:5|max:75',
            'valor' => 'required|numeric|min:1', // Assuming it cannot be 0
            'descripcion' => 'required|min:5|max:500',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
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
}
