<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmpleadoCreateRequest;
use App\Empleado;

class EmpleadoController extends Controller
{
  public function index(){

      $empleados=Empleado::all();
      return view('empleados.index' ,['empleados'=>$empleados]);
  }

public function create(){
      $empleados=Empleado::all();
      return view('empleados.create');
  }

  /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

  public function store(EmpleadoCreateRequest $request){
      $empleados = new Empleado;
      $empleados->cedula = $request->input('cedula');
      $empleados->nombre = $request->input('nombre');
      $empleados->apellido = $request->input('apellido');
      $empleados->direccion = $request->input('direccion');
      $empleados->telefono = $request->input('telefono');
      $empleados->email = $request->input('email');
      $empleados->save();
      return redirect()->route('empleado.index');
  }

  public function edit($id){
      $empleado=Empleado::find($id);
      return view('empleados.editar')->with('empleado',$empleado);
  }

  public function update(Request $request,$id){
      $empleado=Empleado::find($id);
      $datos=array();
      $datos['cedula']=$request->input('cedula');
      $datos['nombre']=$request->input('nombre');
      $datos['apellido']=$request->input('apellido');
      $datos['direccion']=$request->input('direccion');
      $datos['telefono']=$request->input('telefono');
      $datos['email']=$request->input('email');
      $empleado->update($datos);
      return redirect()->route('empleado.index');
  }

  public function delete($id){
      $empleado=Empleado::find($id);
      $empleado->delete();
      return redirect()->route('empleado.index');
  }
}
