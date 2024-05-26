<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('shop', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('Producto.create', compact('categorias'));
    }

    public array $rules = [
        'Nombre' => 'required',
        'Descripcion' => 'required',
        'Precio' => 'required',
        'Cantidad' => 'required',
        'Link' => 'required',
        'Categorias_idCategorias' => 'required'
    ];

    public function postProducto(Request $request)
    {
        Validator::make($request->all(), $this->rules)->validate();

        $producto = new Producto();

        $producto->Nombre = $request->Nombre;
        $producto->Descripcion = $request->Descripcion;
        $producto->Precio = $request->Precio;
        $producto->Cantidad = $request->Cantidad;
        $producto->Link = $request->Link;
        $producto->Categorias_idCategorias = $request->Categorias_idCategorias;

        $producto->save();

        return redirect()->route('shop')->withSuccess('Producto Registrado Correctamente :D');
    }

    
}
