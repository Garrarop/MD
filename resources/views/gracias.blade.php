@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">¡Gracias por registrarte!</div>
                <div class="card-body">
                  <div class="alert alert-info">En cuanto el foro esté disponible se te enviará un mail al correo ingresado, a su vez también se avisara dentro del servidor.</div>
                  <div class="form-group">
                    <a type="button" class="btn btn-outline-success" id="otro" href="/contacto">Enviar comentarios o sugerencias <i class="far fa-edit"></i></a>
                    <a type="button" class="btn btn-outline-success" id="ini" href="/">Volver al inicio <i class="fas fa-home"></i></a>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
