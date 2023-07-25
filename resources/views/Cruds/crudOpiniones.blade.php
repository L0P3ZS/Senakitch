<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/modal.css')}}">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>Document</title>
</head>

<body>


  <h1 class="text-center p-3">Opiniones</h1>

  <div class="p-5 table-resposive">
    <table class="table table-bordered text-align-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Comentarios</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>

        @foreach($comentarios as $row)
        <tr>
          <th scope="row">{{ $row->id }}</th>
          <td>{{ $row->description }}</td>
          <td><button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $row->id }}">
              Editar
            </button>

          </td>
          <div class="modal fade" id="exampleModal{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                  <form action="{{route('crudComentarios.update', $row->id )}}" method="POST">
                    @csrf
                    @method('put')

                    <label for="">Deja tu comentario</label><br>

                    <input name="description" value="{{ $row->description }}" id="">
                    <br>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <td>
            <form action="{{route ('Comentarios.destroy', $row)}}" id="deleteForm" method="POST">
              @csrf
              @method('delete')
              <button type="button" class="btn btn-outline-danger"  onclick="ftnDelPersona(1)">Eliminar</button>
            </form>
          </td>
        </tr>

        @endforeach

      </tbody>
    </table>
  </div>





  <script src="{{ asset('js/funtion.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>