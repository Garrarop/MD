@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Contacto</div>
                <div class="card-body">
                  <div class="container contact-form">
                      <form method="post" action="/contacto">
                          {{ csrf_field() }}
                          <h3>Dejanos un mensaje</h3>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                         <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="text" name="nombre" class="form-control" placeholder="Tu nombre *" value="{{ old('nombre')}}" />
                                  </div>
                                  <div class="form-group">
                                      <input type="text" name="nick" class="form-control" placeholder="Tu nick" value="{{ old('nick')}}" />
                                  </div>
                                  <div class="form-group">
                                      <input type="text" name="mail" class="form-control" placeholder="Tu mail *" value="{{old('mail') }}"/>
                                  </div>
                                  <div class="form-group">
                                      <input type="text" name="telefono" class="form-control" placeholder="Número de teléfono (con característica de país)" value="{{ old('telefono') }}"/>
                                  </div>
                                  <div class="form-group">
                                      <input type="submit" name="Submit" class="btn btn-outline-primary" value="Enviar" required/>
                                  </div>
                                  <p>Los campos con un asterisco(*) son obligatorios</p>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <textarea name="mensaje" class="form-control" placeholder="Mensaje *" style="width: 100%; height: 200px;" value="{{ old('mensaje') }}"></textarea>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
