@extends('layouts.app')

@section('content')
@foreach ($usuarios as $usuario)
<div class="container">
    <div class="row">
        <div id="ColUserINFO" class="col-sm-2">
            <div id="UserINFO" class="card card-body">
                <img src="/uploads/{{ $usuario->PathImagen }}" alt="{{ $usuario->name }}" id="ImgPerfil" style="padding-bottom: 5px;">
                <div id="prfLi  st">
                  <div class="list-group">
                    <a href="{{ route('config') }}" class="list-group-item list-group-item-action">Config</a>
                    <a href="#" class="list-group-item list-group-item-action">Datos</a>
                    <a href="#" class="list-group-item list-group-item-action">Amigos</a>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <div class="row">

                    <div class="col-md-4">
                    <h1>{{ $usuario->nick }}</h1>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                    <h6><b>{{ $usuario->casa }}</b>,{{$usuario->colegio}}</h6>
                    </div>
                  </div>
                   <form class="input-group" action="/postear" method="post">
                    {{ csrf_field() }}
                    <input required class="form-control" id="Publicar" type="text" name="publicar" value="{{ old('publicar') }}">
                    <input type="submit" class="btn btn-primary" name="" value="Publicar">
                   </form>
                  @if(count($errors)>0)
                  	<p>
                  		<ul>
                  			@foreach($errors->all() as $error)
                  				<li style="color:red">{{ $error }}</li>
                  			@endforeach
                  		</ul>
                  	</p>
                	@endif
                </div>
                <div class="card-body">
                  Datos personales:<br>
                  Nombre y Apellido:{{ $usuario->name }}, {{$usuario->lastname}}<br>
                  Pais: {{$usuario->pais}}<br>
                  Uuid: {{$usuario->uuid}}<br>
                  Académicos:<br>
                  Colegio: {{$usuario->colegio}}<br>
                  Casa: {{$usuario->casa}}<br>
                  Año: {{$usuario->año}}<br>
                  Logro:<br>
                  Ultimo logro conseguido: {{$usuario->logro}}<br>
                  Fecha del ultimo logro: {{$usuario->fechalogro}}<br>
                  Laboral:<br>
                  Trabajo y nivel 1: {{$usuario->job1}},{{$usuario->job1lvl}}<br>
                  Trabajo y nivel 2: {{$usuario->job2}},{{$usuario->job2lvl}}<br>
                  Trabajo y nivel 3: {{$usuario->job3}},{{$usuario->job3lvl}}<br>
                  Monetario:<br>
                  Galeones en bolsillo: {{$usuario->galeones}} (No funciona actualmente.)<br>
                  Galeones en Gringotts: {{$usuario->Gringotts}}<br>
                  Libras: {{$usuario->Libras}}<br>
                  Dolares: {{$usuario->Dolar}}<br>
                  Dragots: {{$usuario->Dragot}}<br>
                  Reales: {{$usuario->reales}}<br>
                  Chellines: {{$usuario->Chellin}}<br>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
