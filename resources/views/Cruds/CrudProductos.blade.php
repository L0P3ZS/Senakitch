<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

<h1 class="text-center p-3">Productos  Publicadas</h1>

<div class="p-5 table-resposive">
<table class="table table-bordered text-align-center">
  <thead class="table-dark">
  <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">images</th>
      <th scope="col">Precio</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($productos as $row)
    <tr>
      <th scope="row">{{ $row->id }}</th>
      <td>{{ $row->name }}</td>
      <td><img src="{{ $row->image_path}}" class="img-fluid"></td>
      <td>{{ $row->price }}</td>
      <td><a class="btn btn-outline-primary" href="{{route ('crud.editar', $row) }}" >Editar</a></td>
      <td><form action="{{route ('crud.destroy', $row)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
      </form></td>
    </tr>
   


    @endforeach
 
  </tbody>
</table>
</div><br>

<a class="btn btn-outline-danger " href="{{route ('productos') }}" >Recetas</a><br>

<form action="/logout" method="post">
  @csrf
  
  <a  class="btn btn-outline-danger" href="#" onclick="this.closest('form').submit()">cerrar session</a>
</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>