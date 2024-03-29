<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/StylesAdministrador.css') }}">
    <title>Administrador</title>
</head>

<body class="background">
    <header class="hv-background background">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}"><img id="logoTec" src="{{ asset('/Imagenes/20230309_161828.png') }}" alt="Logo"
                        width="200" height="60" class=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav  g-col-6">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn btn-secondary" href="{{ url('/login') }}" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Administrador
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Salir</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container grid"  style="width: 25rem; white-space: pre-line;  margin-top: 117px  ">
        <div class="row gap-3 mb-3">
            <div class="card car-img  align-items-center col background-cuadro ">
                <a href="{{ url('/cronograma') }}"><img class="animated tada" width="70" height="70" src="{{ asset('/Imagenes/calendario.png') }}" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Cronograma</h5>
                </div>
            </div>
            <div class="card align-items-center col background-cuadro">
                <img class="animated tada " width="80" height="80" src="{{ asset('/Imagenes/edificio-de-oficinas.png') }}"alt="">
                <div class="card-body">
                    <h5 class="card-title">Construcciones</h5>
                </div>
            </div>
        </div>
        <div class="row gap-3">
            <div class="card align-items-center col background-cuadro">
                <a href="{{ route('crudContador') }}"><img class="animated tada" width="70" height="70" src="{{ asset('/Imagenes/target.png') }}" alt="imagen"></a>
                <div class="card-body">
                    <h5 class="card-title">Clientes</h5>
                </div>
            </div>
            <div class="card car-img align-items-center col background-cuadro">
                <a href="{{ route('formInventario') }}"><img class="animated tada" width="80" height="80" src="{{ asset('/Imagenes/document.png') }}" alt="imagen"></a>
                <div class="card-body">
                    <h5 class="card-title">Inventario</h5>
                </div>
            </div>
        </div>
    </div>
</body>
<footer class="footer">
    <div class="justify-content-center">
        <div class="col-auto footer-login ">
            <p>© 2023. By Tatiana, Jhonatan, Mateo, Santiago</p>
        </div>
    </div>
    </div>
</footer>

</html>