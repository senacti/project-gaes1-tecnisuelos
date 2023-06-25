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
    <link rel="stylesheet" href="{{ asset('css/stylesformInventario.css') }}">
    <title>Inventario</title>
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
                                Administrador
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
        <h1 class="container title">Editar Inventario</h1>

        <section class="container-login">
            <div class="img"></div>
            <form method="POST" action="{{route ('iupdate')}}">>
            @csrf

            <div class="container">
  
              <div class="row">
              <div >
                <input type="text" value="{{$rectificar->id}}" hidden name="id">
             </div>
        
                <div class="col">
                  <input type="text" class="form-control" placeholder="Nombre" required name="nombre" value="{{$rectificar->nombre}}">
                </div>
                <div class="col">
                    <input type="int" class="form-control" placeholder="Cantidad" required name="cantidad" value="{{$rectificar->cantidad}}">
                  </div>
              
                
              </div>
        
        
              <div class="row">
                
                <div class="col">
                  <input type="text" class="form-control" placeholder="Categoria" required name="categoria" value="{{$rectificar->categoria}}">
                </div>
                <div class="col">
                    <input type="file" class="form-control" placeholder="Imagen" required name="imagen" value="{{$rectificar->imagen}}">
                  </div>
                
              </div>

              <div class="row">
                
                <div class="col">
                  <input type="text" class="form-control" placeholder="Descripcion" required name="descripcion" value="{{$rectificar->descripcion}}">
                </div>
  
                
              </div>
              <hr>
        
             
                            
                                    </div>

                <div >
                            <input type="submit" class="btn btn-third" value="Actualizar"> 
                </div>
            
            </div>
        </form>
          </section>
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