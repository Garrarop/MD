<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\mensaje;
use App;

class PruebasController extends Controller
{
    public function prueba(){
      return view('prueba');
    }

    public function mensaje(request $request)
    {
      $this->validate($request,[
        'nombre' => 'required',
        'mail' => 'required',
        'mensaje' => 'required|max:400'
      ]);
      $mensaje = new mensaje;
      $mensaje->nombre = $request->nombre;
      $mensaje->nick = $request->nick;
      $mensaje->mail = $request->mail;
      $mensaje->telefono = $request->telefono;
      $mensaje->mensaje = $request->mensaje;
      if (Auth::check()) {
        $mensaje->user_id = Auth::id();
        $mensaje->save();
        return redirect('/success');
      } else {
        $mensaje->save();
        return redirect('/success');
      }
    }

    public function lang(request $request)
    {
      App::setLocale($request->lang);
      return view('welcome');
    }

}
