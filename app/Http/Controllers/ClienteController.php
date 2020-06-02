<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClienteCreateRequest;
use App\Cliente;

class ClienteController extends Controller
{
  public function index(){

      $clientes=Cliente::all();
      return view('clientes.index' ,['clientes'=>$clientes]);
  }

public function create(){
      $clientes=Cliente::all();
      return view('clientes.create');
  }

  /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


  public function store(ClienteCreateRequest $request){
      $clientes = new Cliente;
      $clientes->nombres = $request->input('nombres');
      $clientes->direccion = $request->input('direccion');
      $clientes->telefono = $request->input('telefono');
      $clientes->email = $request->input('email');
      $clientes->especial = $request->input('especial');
      $clientes->clientescol = $request->input('clientescol');
      $clientes->save();
      return redirect()->route('cliente.index');
  }

  public function edit($id){
      $cliente=Cliente::find($id);
      return view('clientes.editar')->with('cliente',$cliente);
  }

  public function update(Request $request,$id){
      $cliente=Cliente::find($id);
      $datos=array();
      $datos['nombres']=$request->input('nombres');
      $datos['direccion']=$request->input('direccion');
      $datos['telefono']=$request->input('telefono');
      $datos['email']=$request->input('email');
      $datos['especial']=$request->input('especial');
      $datos['clientescol']=$request->input('clientescol');
      $cliente->update($datos);
      return redirect()->route('cliente.index');
  }

  public function delete($id){
      $cliente=Cliente::find($id);
      $cliente->delete();
      return redirect()->route('cliente.index');
  }
}
