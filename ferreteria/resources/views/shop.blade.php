@extends('layouts.include')
@section('content')
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Productos</span></h2>

    <div class="row px-xl-5">
        <div class="col-12 pb-1">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div>
                    <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                    <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>
                </div>
                <div class="ml-2">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Latest</a>
                            <a class="dropdown-item" href="#">Popularity</a>
                            <a class="dropdown-item" href="#">Best Rating</a>
                        </div>
                    </div>
                    <div class="btn-group ml-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Showing</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">10</a>
                            <a class="dropdown-item" href="#">20</a>
                            <a class="dropdown-item" href="#">30</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($productos as $producto)

        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden fixed-size">
                    <img class="img-fluid" src="{{$producto->Link}}" alt="">
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