<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{

    public array $rules = [
        'Nombre' => 'required',
        'Descripcion' => 'required',
        'Precio' => 'required',
        'Cantidad' => 'required',
        'Link' => 'required',
        'Categorias_idCategorias' => 'required'
    ];


    public function mostrar(Request $request)
    {
        $categorias = Categoria::all();
        $texto = trim($request->get('texto'));
        $idCategorias = trim($request->get('idCategorias'));

        if ($idCategorias=='' || $idCategorias == null) {
            // Si idCategorias está vacío, no se aplica ningún filtro adicional
            $productos = Producto::where('Nombre','Like','%'.$texto.'%')->paginate();
        } else {
            // Si idCategorias no está vacío, se aplica el filtro por categoría
            $productos = Producto::where('Nombre','Like','%'.$texto.'%')->where('Categorias_idCategorias','=',$idCategorias)->paginate();
        }

        
        return view('shop', compact('productos','texto','categorias','idCategorias'));

    }

    public function index()
    {
        $productos = Producto::all();
        return view('Producto.index', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('Producto.create', compact('categorias'));
    }

    public function store(Request $request)
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

    public function edit(string $id)
    {
        $producto = Producto::find($id);
        $categorias = Categoria::all();
        return view('Producto.edit', compact('producto','categorias'));
    }

    public function update(Request $request, string $id)
    {
        Validator::make($request->all(), $this->rules)->validate();

        $producto = Producto::find($id);

        $producto->Nombre = $request->Nombre;
        $producto->Descripcion = $request->Descripcion;
        $producto->Precio = $request->Precio;
        $producto->Cantidad = $request->Cantidad;
        $producto->Link = $request->Link;
        $producto->Categorias_idCategorias = $request->Categorias_idCategorias;

        $producto->save();

        return redirect('/Producto')->withSuccess('Producto Actualizado Correctamente :D');
    }

    public function destroy(string $id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect('/Producto')->withSuccess('Rol Eliminado Correctamente :D');
    }


    
}
