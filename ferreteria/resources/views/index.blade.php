@extends('layouts.include')
@section('content')

<!-- Carousel Start -->
<div class="container-fluid mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item position-relative active" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="https://d100mj7v0l85u5.cloudfront.net/s3fs-public/styles/webp/public/2023-03/diseno-de-ferreterias-pequenas_0.png.webp?itok=s3Y9IkJm" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate_animated animate_fadeInDown">Ferretería</h1>
                                <p class="mx-md-5 px-5 animate_animated animate_bounceIn">Encuentra una amplia gama de productos de alta calidad. Vive una experiencia de compra única y aprovecha nuestras ofertas especiales.</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate_animated animate_fadeInUp" href="#">Compra Ahora</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="https://img.freepik.com/fotos-premium/herramientas-carpinteria-construccion-sierra-circular-cable-electrico-taladro-inalambrico-fondo_488220-61373.jpg?w=740" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate_animated animate_fadeInDown">Descubre los Mejores Productos Aquí</h1>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate_animated animate_fadeInUp" href="#">Compra Ahora</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="https://d21dgvqi2xrbq6.cloudfront.net/erp/erp-ferreteria/erp-ferreteria-g576.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate_animated animate_fadeInDown">¡Construye Tus Sueños Con Nosotros!</h1>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate_animated animate_fadeInUp" href="#">Compra Ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="https://png.pngtree.com/background/20230611/original/pngtree-two-yellow-hard-hats-are-sitting-around-a-table-picture-image_3165720.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Ahorra 20%</h6>
                    <h3 class="text-white mb-3">Oferta Especial</h3>
                    <a href="" class="btn btn-primary">Compra Ahora</a>
                </div>
            </div>
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6q6zqMe05yVWKqdGElPLpTSA0Esm3s1s5EA&s" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Ahorra 20%</h6>
                    <h3 class="text-white mb-3">Oferta Especial</h3>
                    <a href="" class="btn btn-primary">Compra Ahora</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- Featured Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Producto de calidad</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Envío gratis</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Regreso en 14 días</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Soporte 24 horas</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->

@endsection