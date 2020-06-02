<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ordentrabajo;
use App\Cliente;

class OrdentrabajoController extends Controller
{
  public function index(){

      $orden_trabajos=Ordentrabajo::all();
      return view('orden_trabajos.index' ,['orden_trabajos'=>$orden_trabajos]);
  }

public function create(){
      $cliente=Cliente::all();
      return view('orden_trabajos.create')->with('clientes',$cliente);
  }

  public function store(Request $request){
      $orden_trabajos = new Ordentrabajo;
      $orden_trabajos->nombre = $request->input('nombre');
      $orden_trabajos->detalle = $request->input('detalle');
      $orden_trabajos->fecha_entrada = $request->input('fecha_entrada');
      $orden_trabajos->fecha_salida = $request->input('fecha_salida');
      $orden_trabajos->cliente_id = $request->input('cliente_id');
      $orden_trabajos->save();
      return redirect()->route('orden_trabajo.index');
  }

  public function edit($id){
      $clientes=Cliente::all();
      $orden_trabajo=Ordentrabajo::find($id);
      return view('orden_trabajos.editar')->with('orden_trabajo',$orden_trabajo)->with('clientes',$clientes);
  }

  public function update(Request $request,$id){
      $orden_trabajo=Ordentrabajo::find($id);
      $datos=array();
      $datos['nombre']=$request->input('nombre');
      $datos['detalle']=$request->input('detalle');
      $datos['fecha_entrada']=$request->input('fecha_entrada');
      $datos['fecha_salida']=$request->input('fecha_salida');
      $datos['cliente_id']=$request->input('cliente_id');
      $orden_trabajo->update($datos);
      return redirect()->route('orden_trabajo.index');
  }

  public function delete($id){
      $orden_trabajo=Ordentrabajo::find($id);
      $orden_trabajo->delete();
      return redirect()->route('orden_trabajo.index');
  }
}
