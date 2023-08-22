{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>Document</title>
</head>

<body>


  <h1 class="text-center p-3">Usuarios registrados</h1>

  <div class="p-5 table-resposive">
    <table class="table table-bordered text-align-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Correo</th>
          <th scope="col">Contarseña</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>

        @foreach($crud as $row)
        <tr>
          <th scope="row">{{ $row->id }}</th>
          <td>{{ $row->username }}</td>
          <td>{{ $row->email }}</td>
          <td>{{ $row->password }}</td>
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

                  <form action="{{route('crud.update', $row->id )}}" method="POST">
                    @csrf
                    @method('put')


                    <h1>Editar Registro</h1>
                    <!--nombre-->
                    <div class="input-control">
                      <section>
                        @error('username')
                        <small class="small">{{$message}}</small>
                        @enderror
                      </section>
                      <label for="username">Nombre</label>
                      <input type="text" placeholder="nombre" name="username" id="username" value="{{ $row->username}}">
                    </div>

                    <!--correo electronico-->
                    <div class="input-control">
                      @error('email')
                      <small class="small">{{$message}}</small>
                      @enderror
                      <label for="email">Correo electronico</label>
                      <input type="email" placeholder="correo electronico" name="email" id="email" value="{{ $row->email}}">
                    </div>

                    <!--contraseña-->
                    <div class="input-control">
                      @error('password')
                      <small class="small">{{$message}}</small>
                      @enderror
                      <label for="password">Contraseña</label>
                      <input type="password" placeholder="Almenos 6 caracteres" name="password" id="password" value="{{ $row->password}}">

                    </div>

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
            <form action="{{route ('crud.destroy', $row)}}" id="deleteForm" method="POST">
              @csrf
              @method('delete')
              <button type="button" class="btn btn-outline-danger" onclick="ftnDelPersona(1)">Eliminar</button>
            </form>
          </td>
        </tr>



        @endforeach

      </tbody>
    </table>
  </div><br>




  <a class="btn btn-outline-danger " href="{{route ('register') }}">registro</a><br>

  <form action="/logout" method="post">
    @csrf

    <a class="btn btn-outline-danger" href="#" onclick="this.closest('form').submit()">cerrar session</a>
  </form>


  <script src="{{ asset('js/funtion.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html> --}}
