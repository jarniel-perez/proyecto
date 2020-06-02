@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Listado de Trabajos </h2>
                <div class="btn-group pull-right">
                    <a href="{{route('orden_trabajo.create')}}" class="btn btn-danger"><i class="fa fa-bars"></i>Agregar nuevo Trabajo</a>
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
                                                    <th class="text-center">Orden de Trabajo</th>
                                                    <th class="text-center">Detalles</th>
                                                    <th class="text-center">Fecha de inicio</th>
                                                    <th class="text-center">Fecha de finalización</th>
                                                    <th class="text-center">Cliente</th>
                                                    <th width="200">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($orden_trabajos as $orden_trabajo)
                                              <tr>
                                                <td>{{$orden_trabajo->id}}</td>
                                                <td>{{$orden_trabajo->nombre}}</td>
                                                <td>{{$orden_trabajo->detalle}}</td>
                                                <td>{{$orden_trabajo->fecha_entrada}}</td>
                                                <td>{{$orden_trabajo->fecha_salida}}</td>
                                                <td>{{$orden_trabajo->cliente->nombres}}</td>
                                                <td>
                                                  <a href="{{route('orden_trabajo.editar',['id'=>$orden_trabajo->id])}}" class="btn btn-info btn-sm">Editar</a>
                                                  <a href="{{route('orden_trabajo.delete',['id'=>$orden_trabajo->id])}}" class="btn btn-danger btn-sm">Eliminar</a>
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
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>Ordenes de trabajos</b></h2>
@endsection

@section('menubar')
    <li><a href="#">Home</a></li>
    <li class="active">Ordenes de trabajos</li>
@endsection
