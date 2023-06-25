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
  <title>Crud Ingeniero</title>
  <link rel="stylesheet" href="{{ asset('css/stylesCrudIngeniero.css') }}">
  <script src="https://kit.fontawesome.com/f48a57573d.js" crossorigin="anonymous"></script>
</head>

<body>
  <header class="hv-background">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}"><img id="logoTec" src="{{ asset('Imagenes/20230309_161828.png') }}" alt="Logo" width="200"
            height="60" class=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav  g-col-6">
            <li class="nav-item">
              <a class="nav-link btn btn-secondary" aria-current="page" href="{{ url('/') }}">Inicio</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <form action="index">
    <section class="container-login">
      <div class="img"></div>
      <div class="container">
        <div class="colum-title">
          <h1>Pruebas de Campo</h1>
        </div>
        <div class="colum-pdf">
          <a href="{{route('crudIngeniero.pdf')}}" class="btn btn success"><i class="fa-regular fa-file"></i></a>
        </div>
        <div class="colum-info">
          <div class="id">
            <h6>ID</h6>
          </div>
          <div class="date">
            <h6>Fecha</h6>
          </div>
          <div class="number-p">
            <h6>Nº Prueba</h6>
          </div>
          <div class="cliente">
            <h6>Cliente</h6>
          </div>
          <div class="name-e">
            <h6>Nombre E</h6>
          </div>
          <div class="number-c">
            <h6>Nº Cilindros</h6>
          </div>
          <div class="sondeo">
            <h6>Sondeo</h6>
          </div>
          <div class="eliminar">
            <h6><i class="fa-regular fa-trash-can"></i></h6>
          </div>
          <div class="visualizar">
            <h6><i class="fa-regular fa-eye"></i></h6>
          </div>
        </div>


@foreach ($dato as $datos)
  
        <div class="colum-info-2">
          <div class="id-2">
           {{$datos->id}}
          </div>
          <div class="date-2">
            {{$datos->fecha}}
          </div>
          <div class="number-p-2">
            {{$datos->numero_prueba}}
          </div>
          <div class="cliente-2">
            {{$datos->cliente}}
          </div>
          <div class="name-e-2">
            {{$datos->nombre_empleado}}
          </div>
          <div class="number-c-2">
            {{$datos->compresion}}
          </div>
          <div class="sondeo-2">
            {{$datos->sondeos}}
          </div>
          <div class="editar-2">
            <a class="nav-link btn btn-secondary" aria-current="page" href="{{ route('Peditar',['id'=> $datos->id]) }}">Editar</a>
          </div>
          <div class="eliminar-2">
            <a class="nav-link btn btn-secondary" aria-current="page" href="{{ route('Peliminar',['id'=> $datos->id]) }}">Eliminar</a>
          </div>
        </div>
        @endforeach
      </div>
     
      </div>
    </section>
  </form>
</body>
<footer class="footer footer-login">
  <div class="justify-content-center">
    <div class="col-auto">
      <p>© 2021. By Tatiana, Jhonatan, Mateo, Santiago</p>
    </div>
  </div>
  </div>
</footer>

</html>