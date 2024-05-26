@extends('layouts.include')
@section('content')

<div class="container py-5">
    <div class="card">
        <div class="card-body">
            <form class="mt-4" method="POST" action="{{ route('postProducto') }}">
                @csrf
                <h1 class="text-center">Producto</h1>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="">
                    <label for="floatingInput">Nombre</label>
                    @if ($errors->has('Nombre'))
                    <span class="text-danger">{{$errors->first('Nombre') }}</span>
                    @endif
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Descripcion" name="Descripcion" placeholder="">
                    <label for="floatingInput">Descripcion</label>
                    @if ($errors->has('Descripcion'))
                    <span class="text-danger">{{$errors->first('Descripcion') }}</span>
                    @endif
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Precio" name="Precio" placeholder="">
                    <label for="floatingInput">Precio</label>
                    @if ($errors->has('Precio'))
                    <span class="text-danger">{{$errors->first('Precio') }}</span>
                    @endif
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Cantidad" name="Cantidad" placeholder="">
                    <label for="floatingInput">Cantidad</label>
                    @if ($errors->has('Cantidad'))
                    <span class="text-danger">{{$errors->first('Cantidad') }}</span>
                    @endif
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Link" name="Link" placeholder="">
                    <label for="floatingInput">Link</label>
                    @if ($errors->has('Link'))
                    <span class="text-danger">{{$errors->first('Link') }}</span>
                    @endif
                </div>

                <div class="form-floating">
                    <select class="form-select" id="Categorias_idCategorias" name="Categorias_idCategorias" aria-label="Floating label select example">
                        <option selected>Seleccione su Categoria</option>
                        @foreach($categorias as $categoria)
                        <option value="{{$categoria->idCategorias}}">{{$categoria->Nombre}}</option>
                        @endforeach
                    </select>
                    <label for="floatingSelect">Categorias</label>
                </div>


                <div class="py-5">
                    <button type="submit" class="btn btn-block btn-primary font-weight-bold py-3">Crear Producto</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection