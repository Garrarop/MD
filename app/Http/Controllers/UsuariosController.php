<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use App\player;
use App\User;
use Image;
use App\rede;

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

    public function configuraciones($value='')
    {
      return view('configuraciones');
    }

    public function enlazar(request $request)
    {
      $this->validate($request,[
        'codigo' => 'required|exists:players'
      ],[
      'codigo.exists' => 'El código ingresado no es válido',
      'codigo.required' => 'Debe ingresar un código',
      ]);

      $player = DB::table('players')->where('codigo', $request->codigo)->where('enlazado', 0)->first();
      $player = player::findorfail($player->id);
      if ($player->id !== null){
        $usuario = Auth::user();
        $usuario->player_id = $player->id;
        $usuario->save();
        $player->enlazado = 1;
        $player->codigo = 'Enlazado :D';
        $player->save();
        return redirect('configuracion');
      } else {
        return redirect('configuracion');
      }

    }

    public function general(request $request)
    {
      $user = Auth::User();

      if ($request->email != Auth::user()->email){
        $this->validate($request,['email'=> 'required', 'string', 'email', 'max:255', 'unique:users',],['unique'=> 'El Email ingresado ya está en uso, por favor seleccione otro',]);
        $user->email = $request->email;
      }
      if ($request->name != Auth::user()->name){
        $this->validate($request,['name'=> 'required', 'string', 'max:255',]);
        $user->name = $request->name;
      }
      if ($request->lastname != Auth::user()->lastname){
        $this->validate($request,['lastname'=> 'required', 'string', 'max:255',]);
        $user->name = $request->name;
      }
      if ($request->pais != Auth::user()->pais){
        $this->validate($request,['pais'=> 'required', 'string', 'max:255',]);
        $user->pais = $request->pais;
      }
      if ($request->hasFile('img')) {
        $avatar = $request->file('img');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save( public_path("uploads/" . $filename ) );
        $user->PathImagen = $filename;
      }
      $user->save();
      return redirect('configuracion');
    }

    public function redes(request $request)
    {
      $redes = rede::where('user_id',Auth::user()->id)->firstOrFail();

    }
    public function completarPerfil()
    {
      return redirect('/login');
    }
}
