@extends('layouts.include')
@section('content')

<div class="container py-5">
    <div class="card">
        <div class="card-body">
            <form class="mt-4" method="POST" action="{{ route('postRegister') }}">
                @csrf
                <h1 class="text-center">Registro</h1>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="name@example.com">
                    <label for="floatingInput">Nombres</label>
                    @if ($errors->has('Nombres'))
                    <span class="text-danger">{{$errors->first('Nombres') }}</span>
                    @endif
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Password">
                    <label for="floatingInput">Apellidos</label>
                    @if ($errors->has('Apellidos'))
                    <span class="text-danger">{{$errors->first('Apellidos') }}</span>
                    @endif
                </div>


                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Password">
                    <label for="floatingInput">Correo</label>
                    @if ($errors->has('Correo'))
                    <span class="text-danger">{{$errors->first('Correo') }}</span>
                    @endif
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Celular" name="Celular" placeholder="Password">
                    <label for="floatingInput">Celular</label>
                    @if ($errors->has('Celular'))
                    <span class="text-danger">{{$errors->first('Celular') }}</span>
                    @endif
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Password">
                    <label for="floatingInput">Direccion</label>
                    @if ($errors->has('Direccion'))
                    <span class="text-danger">{{$errors->first('Direccion') }}</span>
                    @endif
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="Departamentos_idDepartamentos" name="Departamentos_idDepartamentos" aria-label="Floating label select example">
                        <option selected>Seleccione su Municipio</option>
                        @foreach($departamentos as $departamento)
                        <option value="{{$departamento->idDepartamentos}}">{{$departamento->Nombre}}</option>
                        @endforeach
                    </select>
                    <label for="floatingSelect">Municipio</label>
                </div>


                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="floatingInput">Contraseña</label>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{$errors->first('password') }}</span>
                    @endif
                </div>


                <div class="form-floating">
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password">
                    <label for="floatingInput">Repetir Contraseña</label>
                    @if ($errors->has('password_confirmation'))
                    <span class="text-danger">{{$errors->first('password_confirmation') }}</span>
                    @endif
                </div>




                <div class="py-5">
                    <button type="submit" class="btn btn-block btn-primary font-weight-bold py-3">Registrarse</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection