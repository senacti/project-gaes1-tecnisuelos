<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<style>
  .cabecera{
    background-color: #4682B4;
    color: white;
  }
</style>

</head>
<body>
<h1 class="text-center">Cartera Clientes</h1> <br>
<table class="table table-bordered table-striped" style="text-align: center;font-size: 20px">
<thead class="cabecera">
<tr>
  <th>ID</th>
  <th>Fecha</th>
  <th>Numero</th>
  <th>Direccion</th>
  <th>Nombre</th>
  <th>Apellido</th>
  <th>Correo</th>
</tr>
</thead>

<tbody>
  @foreach ($crudContador as $cliente)
  <tr>
    <td>{{$cliente->id}} </td>
    <td>{{$cliente->date}} </td>
    <td>{{$cliente->number}} </td>
    <td>{{$cliente->direccion}} </td>
    <td>{{$cliente->name}} </td>
    <td>{{$cliente->last_name}} </td>
    <td>{{$cliente->email}} </td>
  </tr>

  @endforeach
</tbody>
</table>
 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>