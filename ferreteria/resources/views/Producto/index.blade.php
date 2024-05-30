@extends('layouts.include')
@section('content')

<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Productos</span></h2>
<div style="padding: 4%;">
    <a href="{{ route('Producto.create') }}" class="btn btn-primary ">Crear Productos</a>
</div>
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Producto</th>
                <th scope="col" class="text-right" style="padding-right: 4%;">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <th scope="row">{{$producto->idProductos}}</th>
                <td>{{$producto->Nombre}}</td>
                <td class="text-right">
                    <div class="btn-group" role="group">

                        <form action="{{ route('Producto.destroy',$producto->idProductos) }}" method="POST">
                            <a href="/Producto/{{$producto->idProductos}}/edit" class="btn btn-primary btn-sm">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection