@extends('layouts.include')

@section('content')
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pr-3">Productos</span>
    </h2>
    <form action="/shop">
        <div class="row px-xl-5">
            <div class="col-12 pb-1">
                <div class="d-flex align-items-center justify-content-between mb-4">

                    <div>
                        <select class="form-select" id="idCategorias" name="idCategorias" aria-label="Floating label select example">
                            <option selected value="">Seleccione su Categoria</option>
                            @foreach($categorias as $categoria)
                            <option value="{{$categoria->idCategorias}}">{{$categoria->Nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="btn-group">
                        <input type="text" class="from-control" name="texto" value="{{$texto}}" placeholder="Buscar Producto">
                        <input type="submit" class="btn btn-primary " value="Buscar">
                    </div>
                </div>
            </div>
    </form>
    @foreach($productos as $producto)
    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
        <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden fixed-size">
                <img class="img-fluid product-image" src="{{$producto->Link}}" alt="">
                <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href="#"><i class="fa fa-shopping-cart"></i></a>
                    <a class="btn btn-outline-dark btn-square" href="#"><i class="far fa-heart"></i></a>
                    <a class="btn btn-outline-dark btn-square" href="#"><i class="fa fa-sync-alt"></i></a>
                    <a class="btn btn-outline-dark btn-square" href="#"><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
                <a class="h6 text-decoration-none text-truncate" href="">{{$producto->Nombre}}</a>
                <div class="d-flex align-items-center justify-content-center mt-2">
                    <h5>{{$producto->Precio}}</h5>
                    <h6 class="text-muted ml-2"><del>10000</del></h6>
                </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
@endsection