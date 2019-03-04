@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">El mensaje se ha enviado correctamente</div>
                <div class="card-body">
                  <div class="form-group">
                    <a type="button" class="btn btn-outline-success" id="otro" href="/contacto">Enviar otro <i class="far fa-edit"></i></a>
                    <a type="button" class="btn btn-outline-success" id="ini" href="/">Volver al inicio <i class="fas fa-home"></i></a>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
