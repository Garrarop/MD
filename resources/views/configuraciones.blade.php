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
                        <label for="name">Nombre:</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="name">Nombre:</label>
                            </div>
                            <input type="text" class="form-control" name="name" id="name"value="{{ Auth::user()->name }}">
                            <div class="input-group-prepend">
                              <label for="lastname" class="input-group-text">Apellido:</label>
                            </div>
                            <input type="text" id="lastname" name="lastname" class="form-control">
                          </div>
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
                      <div class="alert alert-danger">Proximamente...</div>
                      <form action="/configuracion" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="face"><i class="fab fa-facebook"></i> Facebook:</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Facebook.com/</span>
                            </div>
                            <input type="text" name="face" class="form-control" readonly id="face">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="insta"><i class="fab fa-instagram"></i> Instagram:</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">@</span>
                            </div>
                            <input type="text" name="insta"class="form-control" readonly id="insta">
                          </div>
                        </div>
                        <button type="submit" disable class="btn btn-primary">Guardar</button>
                      </form>
                    </ul>
                  </div>
                  <div id="seg" class="form-group col-md-6 collapse">
                    <ul class="list-group list-group-flush">
                      <div class="alert alert-danger">Proximamente...</div>
                      <form action="/">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="pass">Nueva contraseña:</label>
                          <input type="password" readonly class="form-control" id="pass">
                        </div>
                        <div class="form-group">
                          <label for="pass2">Repite Contraseña:</label>
                          <input type="password" readonly class="form-control" id="pass2">
                        </div>
                        <button type="submit" class="btn btn-primary">Cambiar</button>
                      </form>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
