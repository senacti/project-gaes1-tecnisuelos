<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <title>Inicio</title>
  <link rel="stylesheet" href="{{ asset('css/stylesAgendar.css') }}">
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
                <a class="nav-link btn btn-secondary" href="{{ url('/') }}">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-primary" href="/inicio" role="button">Iniciar Sesion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
  <section class="container-login">
    <div class="img"></div>
    <div class="container">
      <h1><b>Agendar</b></h1>
      <div class="row ">
        <div class="col">
          <h5> Como deseas agendar?</h5>
        </div>
      </div>
     
      <div >
        <a class="btn btn-third" href="{{ url('/Pnatural') }}" type="submit">Natural</a>
      </div>
      <div >
        <a class="btn btn-third" href="{{ url('/Pjuridica') }}"  type="submit">Juridica</a>
      </div>
      </div>
    </div>
  </section>
</body>
<footer class="footer footer-login">
      <div class="justify-content-center">
        <div class="col-auto">
          <p>© 2022. By Tatiana, Jhonatan, Mateo, Santiago</p>
        </div>
      </div>
    </div>
  </footer>
</html>