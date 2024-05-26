@extends('layouts.include')
@section('content')

<div class="container py-5">
    <div class="card">
        <div class="card-body">
            <form class="mt-4" method="POST" action="/Rol">
                @csrf

                <h1 class="text-center">Roles</h1>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Nombre" name="Nombre">
                    <label for="floatingInput">Nombre</label>
                    @if ($errors->has('Nombre'))
                    <span class="text-danger">{{ $errors->first('Nombre') }}</span>
                    @endif
                </div>

                <div class="py-5">
                    <button type="submit" class="btn btn-block btn-primary font-weight-bold py-3">Crear Rol</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
