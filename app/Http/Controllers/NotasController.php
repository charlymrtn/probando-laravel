<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NotasController extends Controller
{
    //
    public function index()
    {
      // code...
      $notas = DB::table('notas')->orderBy('id','desc')->get();

      return view('notas.index',compact('notas'));
    }

    public function show($id)
    {
      // code...
      $nota =DB::table('notas')->select('id','titulo','descripcion')->where('id',$id)->first();
      if (!empty($nota)) {
        // code...
        return view('notas.nota',compact('nota'));
      }else{
        return redirect()->action('NotasController@index');
      }


    }

    public function store(Request $request)
    {
      // code...
      $nota = DB::table('notas')->insert([
        'titulo' => $request->input('titulo'),
        'descripcion' => $request->input('descripcion')
      ]);

      return redirect()->action('NotasController@index');
    }

    public function create()
    {
      // code...
      return view('notas.saveNota');
    }

    public function edit($id)
    {
      $nota = DB::table('notas')->where('id',$id)->first();

      return view('notas.saveNota',compact('nota'));
    }

    public function destroy($id)
    {
      // code...
      //return view('notas.saveNota');
        $nota =DB::table('notas')->where('id',$id)->delete();
        return redirect()->action('NotasController@index')->with('status','nota borrada correctamente');
    }

    public function update(Request $request, $id)
    {
      // code...
      $update = DB::table('notas')->where('id',$id)->update(['titulo'=> $request->titulo,'descripcion' => $request->descripcion]);

      return redirect()->action('NotasController@index')->with('status','nota editada correctamente');
    }
}
