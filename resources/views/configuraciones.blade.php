@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Configuraciones</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <ul class="list-group list-group-flush">
                      @if (Auth::user()->player_id !== null)
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled">Enlazar cuenta <span class="badge badge-success">Completado</span></a>
                      @else
                        <a data-toggle="collapse" data-target="#compl" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Enlazar cuenta <span class="badge badge-warning">¡Atención!</span></a>
                      @endif
                      <a data-toggle="collapse" data-target="#gen" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">General</a>
                      <a data-toggle="collapse" data-target="#cont" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Contacto</a>
                      <a data-toggle="collapse" data-target="#seg" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Seguridad</a>
                    </ul>
                  </div>

                  <div id="compl" class="form-group col-md-6 collapse">
                    <ul class="list-group list-group-flush">
                      @if (Auth::user()->player_id !== null)
                        <div class="alert alert-success">
                          <strong>¡Felicidades!</strong> <br>Tu personaje ya está enlazado.
                        </div>
                      @else
                        <div class="alert alert-info">
                          <strong>¡Enlaza tu personaje de Minecraft!</strong> <br>Entra al servidor, envía el comando <strong>"/Enlazar"</strong> y el codigo que se genere introducelo en el siguiente campo:
                        </div>
                        <form action="/enlazar" method="post">
                          {{ csrf_field() }}
                          <div class="form-group">
                            <label for="codigo">Código:</label>
                            <input type="text" name="codigo" class="form-control" id="codigo">
                          </div>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                      @endif

                    </ul>
                  </div>
                  <div id="gen" class="form-group col-md-6 collapse">
                    <ul class="list-group list-group-flush">
                      <form enctype="multipart/form-data" action="/general" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="email">Cambiar email:</label>
                          <input type="email" name="email" class="form-control" id="email" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Contraseña:</label>
                          <input type="text" name="password" class="form-control" id="pwd" readonly value="Proximamente... (contacte con staff)">
                        </div>
                        <div class="form-group">
                          <label for="name">Nombre:</label>
                          <input type="text" name="name" class="form-control" id="name" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group">
                          <label for="name">Pais:</label>
                          <input type="text" name="pais" class="form-control" id="name" value="{{ Auth::user()->pais }}">
                        </div>
                        <div class="form-group">
                          <label for="img">Imagen de perfil:</label>
                          <div class="custom-file">
                            <input type="file" name="img" id="img">
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                      </form>
                    </ul>
                  </div>
                  <div id="cont" class="form-group col-md-6 collapse">
                    <ul class="list-group list-group-flush">
                      <form action="/action_page.php">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="email">Email address:</label>
                          <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" id="pwd">
                        </div>
                        <div class="form-group form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember me
                          </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </ul>
                  </div>
                  <div id="seg" class="form-group col-md-6 collapse">
                    <ul class="list-group list-group-flush">
                      <form action="/action_page.php">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="email">Email address:</label>
                          <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" id="pwd">
                        </div>
                        <div class="form-group form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember me
                          </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
