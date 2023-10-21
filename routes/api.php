<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;


// Route::get('/user', function () {
//     return json_encode([ 'name' => 'Abigail', 'state' => 'CA' ]);
// })->middleware('auth:sanctum');

// Route::post('login', [
//     App\Http\Controllers\LoginController::class,
//     'login'
// ])->name('login');


Route::resource('/productos', ProductosController::class);