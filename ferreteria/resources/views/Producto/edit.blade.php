@extends('layouts.include')
@section('content')

<div class="container py-5">
    <div class="card">
        <div class="card-body">
            <form class="mt-4" method="POST" action="/Producto/{{$producto->idProductos}}">
                @csrf
                @method('PUT')

                <h1 class="text-center">Producto</h1>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{$producto->Nombre}}">
                    <label for="floatingInput">Nombre</label>
                    @if ($errors->has('Nombre'))
                    <span class="text-danger">{{$errors->first('Nombre') }}</span>
                    @endif
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Descripcion" name="Descripcion" value="{{$producto->Descripcion}}">
                    <label for="floatingInput">Descripcion</label>
                    @if ($errors->has('Descripcion'))
                    <span class="text-danger">{{$errors->first('Descripcion') }}</span>
                    @endif
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Precio" name="Precio" value="{{$producto->Precio}}">
                    <label for="floatingInput">Precio</label>
                    @if ($errors->has('Precio'))
                    <span class="text-danger">{{$errors->first('Precio') }}</span>
                    @endif
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Cantidad" name="Cantidad" value="{{$producto->Cantidad}}">
                    <label for="floatingInput">Cantidad</label>
                    @if ($errors->has('Cantidad'))
                    <span class="text-danger">{{$errors->first('Cantidad') }}</span>
                    @endif
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Link" name="Link" value="{{$producto->Link}}">
                    <label for="floatingInput">Link</label>
                    @if ($errors->has('Link'))
                    <span class="text-danger">{{$errors->first('Link') }}</span>
                    @endif
                </div>

                <div class="form-floating">
                    <select class="form-select" id="Categorias_idCategorias" name="Categorias_idCategorias" aria-label="Floating label select example">
                        <option value="{{ $producto->Categorias_idCategorias }}" selected>{{ $producto->Categorias->Nombre}}</option>
                        @foreach($categorias as $categoria)
                            @if($categoria->idCategorias != $producto->Categorias_idCategorias)
                                <option value="{{$categoria->idCategorias}}">{{$categoria->Nombre}}</option>
                            @endif
                        @endforeach
                    </select>
                    <label for="floatingSelect">Categorias</label>
                </div>
                <div class="py-5">
                    <button type="submit" class="btn btn-block btn-primary font-weight-bold py-3">Actualizar Producto</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
