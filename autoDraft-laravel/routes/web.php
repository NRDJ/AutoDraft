<?php

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

Route::get('/catalogo', function () {
    return view('catalogo');
})->name('catalogo');

Route::get('/laminas', function () {
    return view('laminas');
})->name('laminas');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

