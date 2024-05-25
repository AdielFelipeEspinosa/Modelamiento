@extends('layouts.include')
@section('content')
<div class="container py-5">
    <div class="card">
        <div class="card-body">
            <form class="mt-4" method="POST" action="{{ route('postLogin') }}">
                @csrf
                <h1 class="text-center">Login</h1>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="Correo" name="Correo" placeholder="name@example.com">
                    <label for="floatingInput">Correo</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="floatingPassword">Contraseña</label>
                </div>

                <div class="py-5">
                    <button type="submit" class="btn btn-block btn-primary font-weight-bold py-3">Iniciar Sesion</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection