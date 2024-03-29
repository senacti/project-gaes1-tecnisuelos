<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecniSuelos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/stylesIndex.css') }}"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</head>


<body>
    <header class="hv-background">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container container-fluid">
              <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('Imagenes/20230309_161828.png') }}" id="logoTec" alt="Logo" width="200" height="60"  class=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav  g-col-6">
                  <li class="nav-item">
                    <a class="nav-link btn btn-secondary" aria-current="page" href="{{ url('/') }}">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-secondary" href="{{ url('/servicios') }}">Servicios</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-secondary" href="{{ url('/agendar') }}">Agendar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-secondary" href="{{ url('/') }}">Contacto</a>
                  </li>
                  <li class="nav-item">
                    <a class="btn btn-primary" href="{{ url('/login') }}" role="button">Iniciar Sesion</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset ('Imagenes/imagen2.png') }}" class="d-block w-100" alt="imagen2">
                <div class="carousel-caption">
                    <h1 class="style-title ">TECNISUELOS</h1>
                    <h3> Pavimentos & Concretos</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset ('Imagenes/imagen3.png') }}" class="d-block w-100" alt="imagen3">
                <div class="carousel-caption">
                    <h1 class="style-title ">TECNISUELOS</h1>
                    <h3>Pavimentos & Concretos</h3>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section id="comceptos">
        <article class="container-vision" id="vision">
            <h1 class="style-subtitle">VISIÓN</h1>
            <P class="style-subtitle1">La misión de TECNISUELOS es proporcionar soluciones innovadoras y de alta calidad a nuestros clientes, a través de
                productos y servicios que satisfagan sus necesidades y superen sus expectativas. Buscamos ser líderes en
                nuestro sector, ofreciendo un excelente servicio al cliente y una experiencia de compra sin igual. Nos
                esforzamos por mantener los más altos estándares éticos y de responsabilidad social en todas nuestras
                operaciones, con el objetivo de generar un impacto positivo en las comunidades donde operamos.</P>
        </article>
        <article class="container-mision" id="mision">
            <h1 class="style-subtitle">MISIÓN</h1>
            <p class="style-subtitle1">La visión de TECNISUELOS es ser reconocida como la empresa líder en nuestro sector, ofreciendo productos y servicios
                innovadores que marcan la diferencia en la vida de nuestros clientes. Buscamos crear una marca fuerte y
                respetada, con una reputación impecable en términos de calidad, servicio al cliente y responsabilidad
                social. Nos esforzamos por ser una empresa sostenible y consciente del medio ambiente, y por contribuir
                activamente al bienestar de las comunidades donde operamos.</p>
        </article>
    </section>

</body>

</html>
<footer class="footer">
<div class="justify-content-center">
  <div class="col-auto footer-login ">
    <p>© 2023. By Tatiana, Jhonatan, Mateo, Santiago</p>
  </div>
</div>
</div>
</footer>