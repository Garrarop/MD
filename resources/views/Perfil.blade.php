@extends('layouts.app')

@section('content')
@foreach ($usuarios as $usuario)
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div id="asd" class="card card-body">
                <img src="/uploads/{{ $usuario->PathImagen }}" alt="No" id="ImgPerfil" style="padding-bottom: 5px;">
                <div id="prfList">
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
                   <h1>{{ $usuario->name }}</h1>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
