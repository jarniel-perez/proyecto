<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detalleordentrabajo;
use App\Servicio;
use App\Empleado;
use App\Ordentrabajo;

class DetalleordentrabajoController extends Controller
{
  public function index(){

      $detalle_orden_trabajos=Detalleordentrabajo::all();
      return view('detalle_orden_trabajo.index' ,['detalle_orden_trabajos'=>$detalle_orden_trabajos]);
  }

public function create(){
      $servicio=Servicio::all();
      $empleado=Empleado::all();
      $orden_trabajo=Ordentrabajo::all();
      return view('detalle_orden_trabajo.create')->with('servicios',$servicio)->with('empleados',$empleado)->with('orden_trabajos',$orden_trabajo);
  }

  public function store(Request $request){
      $detalle_orden_trabajos = new Detalleordentrabajo;
      $detalle_orden_trabajos->cantidad = $request->input('cantidad');
      $detalle_orden_trabajos->estado = $request->input('estado');
      $detalle_orden_trabajos->servicio_id = $request->input('servicio_id');
      $detalle_orden_trabajos->empleado_id = $request->input('empleado_id');
      $detalle_orden_trabajos->orden_trabajo_id = $request->input('orden_trabajo_id');
      $detalle_orden_trabajos->save();
      return redirect()->route('detalle_orden_trabajo.index');
  }

  public function edit($id){
      $servicios=Servicio::all();
      $empleados=Empleado::all();
      $orden_trabajos=Ordentrabajo::all();
      $detalle_orden_trabajo=Detalleordentrabajo::find($id);
      return view('detalle_orden_trabajo.editar')->with('detalle_orden_trabajo',$detalle_orden_trabajo)->with('servicios',$servicios)->with('empleados',$empleados)->with('orden_trabajos',$orden_trabajos);
  }

  public function update(Request $request,$id){
      $detalle_orden_trabajo=Detalleordentrabajo::find($id);
      $datos=array();
      $datos['cantidad']=$request->input('cantidad');
      $datos['estado']=$request->input('estado');
      $datos['servicio_id']=$request->input('servicio_id');
      $datos['empleado_id']=$request->input('empleado_id');
      $datos['orden_trabajo_id']=$request->input('orden_trabajo_id');
      $detalle_orden_trabajo->update($datos);
      return redirect()->route('detalle_orden_trabajo.index');
  }

  public function delete($id){
      $detalle_orden_trabajo=Detalleordentrabajo::find($id);
      $detalle_orden_trabajo->delete();
      return redirect()->route('detalle_orden_trabajo.index');
  }
}
