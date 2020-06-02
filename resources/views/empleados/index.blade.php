@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Listado de Empleados </h2>
                <div class="btn-group pull-right">
                    <a href="{{route('empleado.create')}}" class="btn btn-danger"><i class="fa fa-bars"></i>Agregar nuevo Empleado</a>
                </div>
            </div>
            <div class="panel-body panel-body-table">
                <!-- START RESPONSIVE TABLES -->
                <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                        <table class="table datatable table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="90">id</th>
                                                    <th class="text-center">Cédula</th>
                                                    <th class="text-center">Nombres</th>
                                                    <th class="text-center">Apellidos</th>
                                                    <th class="text-center">Dirección</th>
                                                    <th class="text-center">Teléfono</th>
                                                    <th class="text-center">Correo Electrónico</th>
                                                    <th width="200">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($empleados as $empleado)
                                              <tr>
                                                <td>{{$empleado->id}}</td>
                                                <td>{{$empleado->cedula}}</td>
                                                <td>{{$empleado->nombre}}</td>
                                                <td>{{$empleado->apellido}}</td>
                                                <td>{{$empleado->direccion}}</td>
                                                <td>{{$empleado->telefono}}</td>
                                                <td>{{$empleado->email}}</td>
                                                <td>
                                                  <a href="{{route('empleado.editar',['id'=>$empleado->id])}}" class="btn btn-info btn-sm">Editar</a>
                                                  <a href="{{route('empleado.delete',['id'=>$empleado->id])}}" class="btn btn-danger btn-sm">Eliminar</a>
                                                </td>
                                              </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END RESPONSIVE TABLES -->
            </div>
        </div>
    </div>
</div>
<!-- END RESPONSIVE TABLES -->
@endsection

@section('menu')
  @include('plantilla.menu')
@endsection

@section('titlepage')
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>Empleados</b></h2>
@endsection

@section('menubar')
    <li><a href="#">Home</a></li>
    <li class="active">Empleados</li>
@endsection
