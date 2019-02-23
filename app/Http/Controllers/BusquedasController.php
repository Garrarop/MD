<?php

namespace App\Http\Controllers;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class BusquedasController extends Controller
{
  public function buscar(Request $request)

  {

    $buscar = $request->input('buscar');

    $Perfiles = USER::where('name', 'LIKE', "%$buscar%")->paginate(30);

    return view('resultados', compact('productos'));

  }
}
