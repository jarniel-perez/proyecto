<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriaCreateRequest;
use App\Categoria;

class CategoriaController extends Controller
{
  public function index(){

      $categorias=Categoria::all();
      return view('categorias.index' ,['categorias'=>$categorias]);
  }

public function create(){
      $categorias=Categoria::all();
      return view('categorias.create');
  }

  /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

  public function store(CategoriaCreateRequest $request){
      $categorias = new Categoria;
      $categorias->nombre = $request->input('nombre');
      $categorias->descripcion = $request->input('descripcion');
      $categorias->save();
      return redirect()->route('categoria.index');
  }

  public function edit($id){
      $categoria=Categoria::find($id);
      return view('categorias.editar')->with('categoria',$categoria);
  }

  public function update(Request $request,$id){
      $categoria=Categoria::find($id);
      $datos=array();
      $datos['nombre']=$request->input('nombre');
      $datos['descripcion']=$request->input('descripcion');
      $categoria->update($datos);
      return redirect()->route('categoria.index');
  }

  public function delete($id){
      $categoria=Categoria::find($id);
      $categoria->delete();
      return redirect()->route('categoria.index');
  }
}
