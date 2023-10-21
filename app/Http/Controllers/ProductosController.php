<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Resources\V1\ProductosResource;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        return new ProductosResource(Producto::all());
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Producto $post)
    {
        //
    }


    public function update(Request $request, Producto $post)
    {
        //
    }

    public function destroy(Producto $post)
    {
        //
    }
}
