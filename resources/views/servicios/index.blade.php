@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Listado de Servicios </h2>
                <div class="btn-group pull-right">
                    <a href="{{route('servicio.create')}}" class="btn btn-danger"><i class="fa fa-bars"></i>Agregar nuevo Servicio</a>
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
                                                    <th class="text-center">Nombre de Servicio</th>
                                                    <th class="text-center">Precio</th>
                                                    <th class="text-center">Descripción</th>
                                                    <th class="text-center">Categoría</th>
                                                    <th width="200">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($servicios as $servicio)
                                              <tr>
                                                <td>{{$servicio->id}}</td>
                                                <td>{{$servicio->nombre}}</td>
                                                <td>{{$servicio->precio}}</td>
                                                <td>{{$servicio->descripcion}}</td>
                                                <td>{{$servicio->categoria->nombre}}</td>
                                                <td>
                                                  <a href="{{route('servicio.editar',['id'=>$servicio->id])}}" class="btn btn-info btn-sm">Editar</a>
                                                  <a href="{{route('servicio.delete',['id'=>$servicio->id])}}" class="btn btn-danger btn-sm">Eliminar</a>
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
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>Servicios</b></h2>
@endsection

@section('menubar')
    <li><a href="#">Home</a></li>
    <li class="active">Servicios</li>
@endsection
