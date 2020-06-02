@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('servicio_cliente_especial.update',['id'=>$servicio_cliente_especial->id]) }}" method="POST">
          <div class="panel panel-warning">
            @csrf
          <input type="hidden" name="_method" value="PATCH">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Editar Servicio para cliente especial</b></h3>
              <ul class="panel-controls">
                  <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                  <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
              </ul>
            </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label class="col-md-2 control-label"> Precio:</label>
                              <div class="col-md-9">
                                  <div class="input-group">
                                      <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                      <input type="text" require id="precio" name="precio" class="form-control" placeholder="Precio del Servicio" value="{{$servicio_cliente_especial->precio}}"/>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                    </div><!--fin panel body-->
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label class="col-md-2 control-label"> Servicio:</label>
                                  <div class="col-md-9">
                                    <select class="form-control select" data-live-search="true" id="servicio_id" name="servicio_id">
                                      <option selected disabled value="0">Seleccione un servicio</option>
                                        @foreach($servicios as $servicio)
                                          @if($servicio_cliente_especial->servicio_id==$servicio->id)
                                            <option value="{{$servicio->id}}" selected>{{$servicio->nombre}}</option>
                                              @else
                                            <option value="{{$servicio->id}}">{{$servicio->nombre}}</option>
                                          @endif
                                        @endforeach
                                    </select>
                                  </div>
                              </div>
                          </div>
                        </div>
                        </div><!--fin panel body-->
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-md-2 control-label"> Cliente:</label>
                                    <div class="col-md-9">
                                      <select class="form-control select" data-live-search="true" id="cliente_id" name="cliente_id">
                                        <option selected disabled value="0">Seleccione un  cliente</option>
                                          @foreach($clientes as $cliente)
                                            @if($servicio_cliente_especial->cliente_id==$cliente->id)
                                              <option value="{{$cliente->id}}" selected>{{$cliente->nombres}}</option>
                                                @else
                                              <option value="{{$cliente->id}}">{{$cliente->nombres}}</option>
                                            @endif
                                          @endforeach
                                      </select>
                                    </div>
                                </div>
                            </div>
                          </div>
                          </div><!--fin panel body-->
              <div class="panel-footer">
              <a href="{{route('servicio_cliente_especial.index')}}" class="btn btn-default">Cancelar</a>
              <button class="btn btn-info pull-right">Editar</button>
            </div>
          </div>
        </form>
      </div>
</div>
<!-- END RESPONSIVE TABLES -->
@endsection

@section('menu')
  @include('plantilla.menu')
@endsection

@section('titlepage')
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>Editar</b></h2>
@endsection

@section('men')
    <li><a href="#">Home</a></li>
    <li class="active">Dashboard</li>
@endsection
