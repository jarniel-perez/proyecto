<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\Categoria;

class ServicioController extends Controller
{
  public function index(){

      $servicios=Servicio::all();
      return view('servicios.index' ,['servicios'=>$servicios]);
  }

public function create(){
      $categoria=Categoria::all();
      return view('servicios.create')->with('categorias',$categoria);
  }

  public function store(Request $request){
      $servicios = new Servicio;
      $servicios->nombre = $request->input('nombre');
      $servicios->precio = $request->input('precio');
      $servicios->descripcion = $request->input('descripcion');
      $servicios->categoria_id = $request->input('categoria_id');
      $servicios->save();
      return redirect()->route('servicio.index');
  }

  public function edit($id){
      $categorias=Categoria::all();
      $servicio=Servicio::find($id);
      return view('servicios.editar')->with('servicio',$servicio)->with('categorias',$categorias);
  }

  public function update(Request $request,$id){
      $servicio=Servicio::find($id);
      $datos=array();
      $datos['nombre']=$request->input('nombre');
      $datos['precio']=$request->input('precio');
      $datos['descripcion']=$request->input('descripcion');
      $datos['categoria_id']=$request->input('categoria_id');
      $servicio->update($datos);
      return redirect()->route('servicio.index');
  }

  public function delete($id){
      $servicio=Servicio::find($id);
      $servicio->delete();
      return redirect()->route('servicio.index');
  }
}
