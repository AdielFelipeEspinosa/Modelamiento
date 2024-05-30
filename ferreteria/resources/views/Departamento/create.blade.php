@extends('layouts.include')
@section('content')

<div class="container py-5">
    <div class="card">
        <div class="card-body">
            <form class="mt-4" method="POST" action="/Departamento">
                @csrf

                <h1 class="text-center">Municipio</h1>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Nombre" name="Nombre">
                    <label for="floatingInput">Nombre</label>
                    @if ($errors->has('Nombre'))
                    <span class="text-danger">{{ $errors->first('Nombre') }}</span>
                    @endif
                </div>

                <div class="form-floating">
                    <select class="form-select" id="Municipios_idMunicipios" name="Municipios_idMunicipios" aria-label="Floating label select example">
                        <option selected>Seleccione su Departamento</option>
                        @foreach($municipios as $municipio)
                        <option value="{{$municipio->idMunicipios}}">{{$municipio->Nombre}}</option>
                        @endforeach
                    </select>
                    <label for="floatingSelect">Departamento</label>
                </div>

                <div class="py-5">
                    <button type="submit" class="btn btn-block btn-primary font-weight-bold py-3">Crear Municipio</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
