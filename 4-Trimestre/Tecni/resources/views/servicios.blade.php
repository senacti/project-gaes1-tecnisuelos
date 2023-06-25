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
  <title>Servicios de Pruebas de Suelos</title>
  <link rel="stylesheet" href="{{ asset('css/stylesServicios.css') }}">
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
                    <a class="nav-link btn btn-secondary" href="{{ url('/agendar') }}">Agendar</a>
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
<header  class="hv-main">
    <div class="lider-container ">
    <h1>¡Descubre los secretos ocultos bajo tus pies con nuestra empresa líder en pruebas de suelos en Colombia!</h1>
    </div>
    </header>

  <main class="hv-bajo">
  <section class="section section-p ">
      <p>Nos apasiona desvelar los misterios que nacen debajo de la superficie terrestre. Nuestro equipo de expertos en geotecnia está dedicado a brindarte una amplia gama de servicios de pruebas de suelos, garantizando que tu proyecto se construya sobre una base sólida y segura.</p>
      <p><b>Nuestros servicios incluyen:</b></p>
    </section>

    <section >
        <div class= "container-text  ">
        <div class="image-container container-imagenes ">
        <div class="text-container">
          <h2>Análisis de composición del suelo</h2>
          <p >Utilizando tecnología de vanguardia, evaluamos minuciosamente las propiedades físicas y químicas de tu suelo. Desde su densidad y contenido de humedad hasta su pH y capacidad de carga, proporcionamos una imagen completa de su composición única.</p>
          <img src="{{ asset('Imagenes/composición.jpg') }}" alt="composición">
        </div>
      </div>
      </div>
    </section>

    <section>
        <div class= "container-text  ">
        <div class="image-container container-imagenes ">
        <div class="text-container">
             <h2>Pruebas de compactación</h2>
            <p>Comprobamos la compactación del suelo para garantizar una adecuada capacidad de soporte y estabilidad. Nuestras pruebas precisas determinan la densidad óptima y el grado de compactación necesario para tus proyectos de construcción.</p>
            <img src="{{ asset('Imagenes/compactacion.jpg') }}" alt="compactacion">
    </div>
    </div>
    </div>
    </section>

    <section>
    <div class= "container-text  ">
        <div class="image-container container-imagenes ">
        <div class="text-container">
      <h2>Pruebas de resistencia</h2>
      <p>Mediante ensayos de laboratorio y pruebas in situ, evaluamos la resistencia del suelo ante cargas estáticas y dinámicas. Estos análisis son esenciales para la planificación de proyectos de ingeniería, como la construcción de edificios, puentes y carreteras.</p>
      <img src="{{ asset('Imagenes/resistencia.jpg') }}" alt="resistencia">
    </div>
    </div>
    </div>
    </section>

    <section>
    <div class= "container-text  ">
        <div class="image-container container-imagenes ">
        <div class="text-container">
      <h2>Pruebas de permeabilidad</h2>
      <p>Medimos la permeabilidad del suelo para determinar su capacidad de drenaje. Estas pruebas son esenciales para la planificación de proyectos de construcción, ya que un drenaje inadecuado puede provocar daños estructurales y problemas de salud.</p>
      <img src="{{ asset('Imagenes/permeabilidad.jpg') }}" alt="permeabilidad">
    </div>
    </div>
    </div>
    </section>

    <footer class="footer footer-login">
  <div class="justify-content-center">
    <div class="col-auto">
      <p>© 2021. By Tatiana, Jhonatan, Mateo, Santiago</p>
    </div>
  </div>
  </div>
</footer>
    </main>
</body>
</html>

