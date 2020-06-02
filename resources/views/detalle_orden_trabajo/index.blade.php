@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Listado de los detalles de las ordenes de trabajos </h2>
                <div class="btn-group pull-right">
                    <a href="{{route('detalle_orden_trabajo.create')}}" class="btn btn-danger"><i class="fa fa-bars"></i>Agregar detalles para una orden de trabajo</a>
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
                                                    <th class="text-center">Cantidad</th>
                                                    <th class="text-center">Estado</th>
                                                    <th class="text-center">Servicio</th>
                                                    <th class="text-center">Empleado</th>
                                                    <th class="text-center">Orden de trabajo</th>
                                                    <th width="200">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($detalle_orden_trabajos as $detalle_orden_trabajo)
                                              <tr>
                                                <td>{{$detalle_orden_trabajo->id}}</td>
                                                <td>{{$detalle_orden_trabajo->cantidad}}</td>
                                                <td>{{$detalle_orden_trabajo->estado}}</td>
                                                <td>{{$detalle_orden_trabajo->servicio->nombre}}</td>
                                                <td>{{$detalle_orden_trabajo->empleado->nombre}}</td>
                                                <td>{{$detalle_orden_trabajo->ordentrabajo->nombre}}</td>
                                                <td>
                                                  <a href="{{route('detalle_orden_trabajo.editar',['id'=>$detalle_orden_trabajo->id])}}" class="btn btn-info btn-sm">Editar</a>
                                                  <a href="{{route('detalle_orden_trabajo.delete',['id'=>$detalle_orden_trabajo->id])}}" class="btn btn-danger btn-sm">Eliminar</a>
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
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>detalles de las ordenes de trabajos</b></h2>
@endsection

@section('menubar')
    <li><a href="#">Home</a></li>
    <li class="active">detalle de ordenes</li>
@endsection
