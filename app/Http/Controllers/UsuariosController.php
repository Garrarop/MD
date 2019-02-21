<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
class UsuariosController extends Controller
{
    public function verPerfil($id = null)
    {
      if ($id == null) {
        if (Auth::user() !== null)
        $id = Auth::user()->id;
        else {
          return redirect('/login');
        }
      }
      $usuarios = DB::table('users')->select('id','name','PathImagen')->where('id', $id)->get();
      //echo $usuarios;
      return view('perfil')->with('usuarios', $usuarios);

    }

    public function completarPerfil()
    {
      return redirect('/login');
    }
}
