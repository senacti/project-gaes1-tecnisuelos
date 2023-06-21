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
  <link rel="stylesheet" href="{{ asset('css/stylesNuevoInforme.css') }}">
  <title> Pruebas de Campo</title>
</head>

<body class="background">
  <header class="hv-background background wrapper">
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/Imagenes/20230309_161828.png') }}" id="logoTec" alt="Logo" width="200"
            height="60" class=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav  g-col-6">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn btn-secondary" href="{{ url('/#') }}" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Laboratorista</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('/laboratorista') }}" >Atras</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div id="wrapper">
    <h1 class="container title">Pruebas de Campo</h1>

    <section class="container-login">
      <div class="img"></div>


      <form  method="POST" action="{{route ('crear_prueba_campo')}}">
      @csrf
        <div class="container">

          <div class="row">

            <div class="col">
              <input type="text" class="form-control" placeholder="Nombre Empleado" required name="nombre_empleado">
            </div>
            <div class="col">
              <input type="date" class="form-control" placeholder="Fecha" required name="fecha">
            </div>
            <div class="col">
              <input type="number" class="form-control" placeholder="Numero de Cilindro" required name="numero_cilindro">
            </div>

          </div>


          <div class="row">

            <div class="col">
              <input type="number" class="form-control" placeholder="Numero de Prueba " required name="numero_prueba">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Cliente" required name="cliente">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Ubicación" required name="ubicacion">
            </div>

          </div>
          <hr>

          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Sondeos" required name="sondeos">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Revenimiento" required name="revenimiento">
            </div>

          </div>


          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Ultrasónico" required name="ultrasonico">
            </div>
            <div class="col">
              <input type="number" class="form-control" placeholder="Esclerometría" required name="esclerometria">
            </div>

          </div>

          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Análisis petrográficos en agregados" required name="analisis_petrograficos">
            </div>
            <div class="col">
              <input type="number" class="form-control" placeholder="Elaboración de cilindros" required name="elaboracion">
            </div>

          </div>


          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Reactividad potencial (Método químico)" required name="reactividad">
            </div>

          </div>

          <div class="row">
            <div class="col">
              <input type="text" class="form-control"
                placeholder="Compresión de cilindros de Tiempos de fraguado inicial y final" required  name="compresion">
            </div>

          </div>

          <div>
            <input type="submit" class="btn btn-third" value="Crear">
          </div>

        </div>
      </form>
    </section>

    <div id="info">
      <input type="checkbox" id="menu" name="menu" class="menu-checkbox">
      <div class="menu">
        <label class="menu-toggle" for="menu"><span>Toggle</span></label>
        <ul>
          <li>
            <a href="NuevoInforme" class="btn btn-secondarys">Nuevo Informe</a>
          </li>
          <li>
            <a href="HistoInformes" class="btn btn-secondarys">Historial de Informes</a>
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