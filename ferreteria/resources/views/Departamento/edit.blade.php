@extends('layouts.include')
@section('content')

<div class="container py-5">
    <div class="card">
        <div class="card-body">
            <form class="mt-4" method="POST" action="/Departamento/{{$departamento->idDepartamentos}}">
                @csrf
                @method('PUT')

                <h1 class="text-center">Departamentos</h1>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ old('Nombre', $departamento->Nombre) }}">
                    <label for="floatingInput">Nombre</label>
                    @if ($errors->has('Nombre'))
                    <span class="text-danger">{{ $errors->first('Nombre') }}</span>
                    @endif
                </div>

                <div class="form-floating">
                    <select class="form-select" id="Municipios_idMunicipios" name="Municipios_idMunicipios" aria-label="Floating label select example">
                        <option value="{{ $departamento->Municipios_idMunicipios }}" selected>{{ $departamento->Municipios->Nombre}}</option>
                        @foreach($municipios as $municipio)
                            @if($municipio->idMunicipios != $departamento->Municipios_idMunicipios)
                                <option value="{{$categoria->idCategorias}}">{{$departamento->Nombre}}</option>
                            @endif
                        @endforeach
                    </select>
                    <label for="floatingSelect">Categorias</label>
                </div>

                <div class="py-5">
                    <button type="submit" class="btn btn-block btn-primary font-weight-bold py-3">Actualizar Departamento</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
