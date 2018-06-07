<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrutasController extends Controller
{
    //
    public function index()
    {
      // code...
      return view('frutas.index')->with('frutas',array('naranja','manzana','uva','guayaba','piña'));
    }

    public function naranjas()
    {
      // code...
      return 'accion de naranjas';
    }

    public function manzanas()
    {
      // code...
      return 'accion de manzanas';
    }

    public function formulario(Request $request)
    {
      // code...
      return 'el nombre de la fruta es '.$request->input('nombre');
    }
}
