@extends('layouts.app')

 @section('content')
   <div class="container">
     <div class="card card-default">
       <div class="card-header">
         <h1>Publicar un producto</h1>
           <div class="input-group">
             <input autofocus required class="form-control" id="name" type="text" name="name" value="{{ old('name') }}">
             <input type="submit" class="btn btn-primary" name="" value="Publicar">
           </div>
       </div>
       <div class="card-body">
         <form class="" action="/Vender" method="post">
           {{ csrf_field() }}
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
         </form>
       </div>
     </div>
   </div>
 @endsection
