<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicioclienteespecial;
use App\Servicio;
use App\Cliente;

class ServicioespecialController extends Controller
{
  public function index(){

      $servicio_clientes_especiales=Servicioclienteespecial::all();
      return view('servicio_cliente_especial.index' ,['servicio_clientes_especiales'=>$servicio_clientes_especiales]);
  }

public function create(){
      $servicio=Servicio::all();
      $cliente=Cliente::all();
      return view('servicio_cliente_especial.create')->with('servicios',$servicio)->with('clientes',$cliente);
  }

  public function store(Request $request){
      $servicio_clientes_especiales = new Servicioclienteespecial;
      $servicio_clientes_especiales->precio = $request->input('precio');
      $servicio_clientes_especiales->servicio_id = $request->input('servicio_id');
      $servicio_clientes_especiales->cliente_id = $request->input('cliente_id');
      $servicio_clientes_especiales->save();
      return redirect()->route('servicio_cliente_especial.index');
  }

  public function edit($id){
      $servicios=Servicio::all();
      $clientes=Cliente::all();
      $servicio_cliente_especial=Servicioclienteespecial::find($id);
      return view('servicio_cliente_especial.editar')->with('servicio_cliente_especial',$servicio_cliente_especial)->with('servicios',$servicios)->with('clientes',$clientes);
  }

  public function update(Request $request,$id){
      $servicio_cliente_especial=Servicioclienteespecial::find($id);
      $datos=array();
      $datos['precio']=$request->input('precio');
      $datos['servicio_id']=$request->input('servicio_id');
      $datos['cliente_id']=$request->input('cliente_id');
      $servicio_cliente_especial->update($datos);
      return redirect()->route('servicio_cliente_especial.index');
  }

  public function delete($id){
      $servicio_cliente_especial=Servicioclienteespecial::find($id);
      $servicio_cliente_especial->delete();
      return redirect()->route('servicio_cliente_especial.index');
  }
}
