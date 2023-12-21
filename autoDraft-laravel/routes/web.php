<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/catalogo', [ProductoController::class, 'showCatalogo'])->name('catalogo');

Route::get('/laminas', function () {
    return view('laminas');
})->name('laminas');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/dashboard', [ProductoController::class, 'getProducts'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::get('cesta', function () {
    return view('cesta');
})->name('cesta');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Create product
Route::post('/producto/store', [ProductoController::class, 'storeProductInDatabase'])
->middleware(['auth', 'verified'])->name('producto.store');

//Delete product
Route::delete('/products/{id}', [ProductoController::class, 'destroy'])
->middleware(['auth', 'verified']);

//Update product
Route::get('/products/{id}/modificar', [ProductoController::class, 'modificar'])
->middleware(['auth', 'verified'])->name('modificar');
Route::post('/products/{id}/modificar', [ProductoController::class, 'update'])
->middleware(['auth', 'verified'])->name('update');

// add to shoppingc cart/cesta
Route::get('/add-to-cesta/{id}', [ProductoController::class, 'addToCesta'])->name('add.to.cesta');

// remove from cart/cesta
Route::get('/remove-from-cesta/{id}', [ProductoController::class, 'removeFromCesta'])->name('remove.from.cesta');

// remove from cart/cesta
Route::post('/ubicacion', [ProductoController::class, 'ubicacion'])->name('ubicacion');

Route::get('/ubicacion', [ProductoController::class, 'ubicacion'])->name('ubicacion');


require __DIR__.'/auth.php';