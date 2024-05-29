@php
use Illuminate\Support\Facades\Auth;
use App\Models\User;
@endphp

@extends('layouts.include')
@section('content')

<div class="container py-5">
    <div class="card">
        <div class="card-body">
            <form class="mt-4" method="POST" action="/User/{{$user->idUsers}}">
                @csrf
                @method('PUT')
                <h1 class="text-center">Actualizar Usuario</h1>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Nombres" name="Nombres" value="{{$user->Nombres}}">
                    <label for="floatingInput">Nombres</label>
                    @if ($errors->has('Nombres'))
                    <span class="text-danger">{{$errors->first('Nombres') }}</span>
                    @endif
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Apellidos" name="Apellidos" value="{{$user->Apellidos}}">
                    <label for="floatingInput">Apellidos</label>
                    @if ($errors->has('Apellidos'))
                    <span class="text-danger">{{$errors->first('Apellidos') }}</span>
                    @endif
                </div>


                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="Correo" name="Correo" value="{{$user->Correo}}">
                    <label for="floatingInput">Correo</label>
                    @if ($errors->has('Correo'))
                    <span class="text-danger">{{$errors->first('Correo') }}</span>
                    @endif
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Celular" name="Celular" value="{{$user->Celular}}">
                    <label for="floatingInput">Celular</label>
                    @if ($errors->has('Celular'))
                    <span class="text-danger">{{$errors->first('Celular') }}</span>
                    @endif
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Direccion" name="Direccion" value="{{$user->Direccion}}">
                    <label for="floatingInput">Direccion</label>
                    @if ($errors->has('Direccion'))
                    <span class="text-danger">{{$errors->first('Direccion') }}</span>
                    @endif
                </div>


                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password">
                    <label for="floatingInput">Nueva Contraseña</label>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{$errors->first('password') }}</span>
                    @endif
                </div>


                @if (Auth::check() && Auth::user()->Roles_idRoles == 1)
                    <div class="form-floating mb-3">
                        <select class="form-select" id="Roles_idRoles" name="Roles_idRoles">
                            <option value="{{ $user->Roles_idRoles }}" selected>{{ $user->Roles->Nombre }}</option>
                            @foreach($roles as $rol)
                                @if($rol->idRoles != $user->Roles_idRoles)
                                    <option value="{{ $rol->idRoles }}">{{ $rol->Nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                        <label for="floatingSelect">Roles</label>
                    </div>
                @endif


                <div class="py-5">
                    <button type="submit" class="btn btn-block btn-primary font-weight-bold py-3">Actualizar Usuario</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection