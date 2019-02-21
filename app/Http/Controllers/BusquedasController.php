<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class BusquedasController extends Controller
{
  public function buscar(Request $request)

  {

    $buscar = $request->input('buscar');

    $Perfiles = Perfil::where('name', 'LIKE', "%$buscar%")->paginate(30);

    return view('resultados', compact('productos'));

  }
}
