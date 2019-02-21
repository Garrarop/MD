<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\posteo;


class PruebasController extends Controller
{
    public function prueba(){
      return view('prueba');
    }

    public function postear(request $request)
    {
      if (Auth::check()) {
        $this->validate($request,[
          'publicar' => 'required|max:150|min:10'
        ]);
        $posteo = new Posteo;
          $posteo->post = $request->publicar;
          $posteo->fecha = getdate();
          $posteo->user_id = Auth::Id();
          $posteo->user_id2 = $request->path();
        echo $posteo;
      } else {
        return redirect(route('login'));
      }
    }

}
