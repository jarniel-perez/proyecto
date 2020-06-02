@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('detalle_orden_trabajo.update',['id'=>$detalle_orden_trabajo->id]) }}" method="POST">
          <div class="panel panel-warning">
            @csrf
          <input type="hidden" name="_method" value="PATCH">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Editar detalles de ordenes de trabajos</b></h3>
              <ul class="panel-controls">
                  <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                  <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
              </ul>
            </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label class="col-md-2 control-label"> Cantidad:</label>
                              <div class="col-md-9">
                                  <div class="input-group">
                                      <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                      <input type="text" require id="cantidad" name="cantidad" class="form-control" placeholder="cantidad" value="{{$detalle_orden_trabajo->cantidad}}"/>
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
                                <label class="col-md-2 control-label"> Estado:</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" require id="estado" name="estado" class="form-control" placeholder="estado" value="{{$detalle_orden_trabajo->estado}}"/>
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
                                          @if($detalle_orden_trabajo->servicio_id==$servicio->id)
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
                                    <label class="col-md-2 control-label"> Empleado:</label>
                                    <div class="col-md-9">
                                      <select class="form-control select" data-live-search="true" id="empleado_id" name="empleado_id">
                                        <option selected disabled value="0">Seleccione un empleado</option>
                                          @foreach($empleados as $empleado)
                                            @if($detalle_orden_trabajo->empleado_id==$empleado->id)
                                              <option value="{{$empleado->id}}" selected>{{$empleado->nombre}}</option>
                                                @else
                                              <option value="{{$empleado->id}}">{{$empleado->nombre}}</option>
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
                                      <label class="col-md-2 control-label"> Orden de trabajo:</label>
                                      <div class="col-md-9">
                                        <select class="form-control select" data-live-search="true" id="orden_trabajo_id" name="orden_trabajo_id">
                                          <option selected disabled value="0">Seleccione una orden de trabajo</option>
                                            @foreach($orden_trabajos as $orden_trabajo)
                                              @if($detalle_orden_trabajo->orden_trabajo_id==$orden_trabajo->id)
                                                <option value="{{$orden_trabajo->id}}" selected>{{$orden_trabajo->nombre}}</option>
                                                  @else
                                                <option value="{{$orden_trabajo->id}}">{{$orden_trabajo->nombre}}</option>
                                              @endif
                                            @endforeach
                                        </select>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            </div><!--fin panel body-->
              <div class="panel-footer">
              <a href="{{route('detalle_orden_trabajo.index')}}" class="btn btn-default">Cancelar</a>
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
