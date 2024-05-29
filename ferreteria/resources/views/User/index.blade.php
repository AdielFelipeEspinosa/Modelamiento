@extends('layouts.include')
@section('content')

<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Usuarios</span></h2>

<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Rol</th>
                <th scope="col" class="text-right" style="padding-right: 4%;">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{$user->idUsers}}</th>
                <td>{{$user->Nombres}}</td>
                <td>{{$user->Roles->Nombre}}</td>
                <td class="text-right">
                    <div class="btn-group" role="group">

                        <form action="{{ route('User.destroy',$user->idUsers) }}" method="POST">
                            <a href="/User/{{$user->idUsers}}/edit" class="btn btn-primary btn-sm">Editar</a>
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