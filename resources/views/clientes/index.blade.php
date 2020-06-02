@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Listado de Clientes </h2>
                <div class="btn-group pull-right">
                    <a href="{{route('cliente.create')}}" class="btn btn-danger"><i class="fa fa-bars"></i>Agregar nuevo Cliente</a>
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
                                                    <th class="text-center">Nombres</th>
                                                    <th class="text-center">Dirección</th>
                                                    <th class="text-center">Teléfono</th>
                                                    <th class="text-center">Correo electrónico</th>
                                                    <th class="text-center">Especial</th>
                                                    <th class="text-center">clientecol</th>
                                                    <th width="200">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($clientes as $cliente)
                                              <tr>
                                                <td>{{$cliente->id}}</td>
                                                <td>{{$cliente->nombres}}</td>
                                                <td>{{$cliente->direccion}}</td>
                                                <td>{{$cliente->telefono}}</td>
                                                <td>{{$cliente->email}}</td>
                                                <td>{{$cliente->especial}}</td>
                                                <td>{{$cliente->clientescol}}</td>
                                                <td>
                                                  <a href="{{route('cliente.editar',['id'=>$cliente->id])}}" class="btn btn-info btn-sm">Editar</a>
                                                  <a href="{{route('cliente.delete',['id'=>$cliente->id])}}" class="btn btn-danger btn-sm">Eliminar</a>
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
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>Clientes</b></h2>
@endsection

@section('menubar')
    <li><a href="#">Home</a></li>
    <li class="active">Clientes</li>
@endsection
