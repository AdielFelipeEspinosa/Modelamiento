@php
use Illuminate\Support\Facades\Auth;
use App\Models\User;
@endphp

<div class="container-fluid bg-dark mb-30" style="padding: 1%;">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block" style="flex: 0 0 25%;">
            <a href="/" class="text-decoration-none" style="height: 6px;">
                <span class="h1 text-uppercase text-primary bg-dark px-2">Ferre</span>
                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Teria</span>
            </a>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="/" class="nav-item nav-link active">Inicio</a>
                        <a href="{{route('shop')}}" class="nav-item nav-link">Tienda</a>
                        <a href="#" class="nav-item nav-link">Contact</a>
                        @if (Auth::check())

                        @php
                        $idUsers=(Auth::user()->idUsers);
                        $user=User::find($idUsers);
                        @endphp

                        @switch(auth::user()->Roles_idRoles)

                        @case(1)
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Admin <i class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="/Producto" class="dropdown-item">Administrar Productos</a>
                                <a href="/Rol" class="dropdown-item">Administrar Roles</a>
                                <a href="/User" class="dropdown-item">Administrar Usuarios</a>
                            </div>
                        </div>
                        @break

                        @case(2)
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Cliente <i class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="#" class="dropdown-item">Opcion de Cliente 1</a>
                                <a href="#" class="dropdown-item">Opcion de Cliente 2</a>
                            </div>
                        </div>
                        @break


                        @endswitch

                        @endif


                    </div>

                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                    </div>

                    @guest
                    <div class="d-inline-flex align-items-center" style="margin-left: 2%;">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Cuenta</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="/login"><button class="dropdown-item" type="button">Inicar Sesion</button></a>
                                <a href="/register"><button class="dropdown-item" type="button">Registrarse</button></a>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="d-inline-flex align-items-center" style="margin-left: 2%;">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Cuenta</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{ route('User.edit', ['User' => $user->idUsers]) }}"><button class="dropdown-item" type="button">{{$user->Nombres}}</button></a>
                                <a href="{{route('logout')}}"><button class="dropdown-item" type="button">Salir</button></a>

                            </div>
                        </div>
                    </div>
                    @endguest
                </div>
            </nav>
        </div>
    </div>

    

</div>

<div style="display: flex; justify-content: center;">
    @if (Session::get('message'))
    <div class="alert alert-danger text-center" style="width: 50%;" role="alert">
        {{ Session::get('message') }}
    </div>
    @endif
    @if (Session::get('success'))
    <div class="alert alert-success text-center" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
</div>