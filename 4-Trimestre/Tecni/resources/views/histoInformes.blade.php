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
    <link rel="stylesheet"  href="{{ asset('css/stylesHistoInformes.css') }}">
    <title>Historial</title>
</head>

<body class="background">
    <header class="hv-background background wrapper">
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
                            <a class="nav-link dropdown-toggle btn btn-secondary" href="{{ url('/#') }}" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Laboratorista
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/laboratorista') }}">Atras</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="wrapper">
        <h1 class="container title">Historial de Informes</h1>

        <div id="container-pdf">
            <object class="pdfview" type="application/pdf" data="http://www.mag.go.cr/bibliotecavirtual/P33-9965.pdf"></object>
            <object class="pdfview" type="application/pdf" data="https://inta.gob.ar/sites/default/files/script-tmp-tcnicas_de_toma_y_remisin_de_muestras_de_suelos.pdf"></object>
        </div>
       
        <div id="info">
            <input type="checkbox" id="menu" name="menu" class="menu-checkbox">
            <div class="menu">
                <label class="menu-toggle" for="menu"><span>Toggle</span></label>
                <ul>
                    <li>
                        <a href="NuevoInforme" class="btn btn-secondarys">Nuevo Informe</a>
                    </li>
                    <li>
                        <a href="PruebasdeCampo" class="btn btn-secondarys">Pruebas de Campo</a>
                    </li>
                    
                </ul>
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
</footer>
</html>