@extends('layouts.include')
@section('content')

<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Roles</span></h2>
<div style="padding: 4%;">
    <a href="{{ route('Rol.create') }}" class="btn btn-primary ">Crear Roles</a>
</div>
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Rol</th>
                <th scope="col" class="text-right" style="padding-right: 4%;">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $rol)
            <tr>
                <th scope="row">{{$rol->idRoles}}</th>
                <td>{{$rol->Nombre}}</td>
                <td class="text-right">
                    <div class="btn-group" role="group">

                        <form action="{{ route('Rol.destroy',$rol->idRoles) }}" method="POST">
                            <a href="/Rol/{{$rol->idRoles}}/edit" class="btn btn-primary btn-sm">Editar</a>
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