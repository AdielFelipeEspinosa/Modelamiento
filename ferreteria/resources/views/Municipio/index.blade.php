@extends('layouts.include')
@section('content')

<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Departamento</span></h2>
<div style="padding: 4%;">
    <a href="{{ route('Municipio.create') }}" class="btn btn-primary ">Crear Departamento</a>
</div>
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Departamento</th>
                <th scope="col" class="text-right" style="padding-right: 4%;">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($municipios as $municipio)
            <tr>
                <th scope="row">{{$municipio->idMunicipios}}</th>
                <td>{{$municipio->Nombre}}</td>
                <td class="text-right">
                    <div class="btn-group" role="group">

                        <form action="{{ route('Municipio.destroy',$municipio->idMunicipios) }}" method="POST">
                            <a href="/Municipio/{{$municipio->idMunicipios}}/edit" class="btn btn-primary btn-sm">Editar</a>
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