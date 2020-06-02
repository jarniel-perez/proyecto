@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('detalle_orden_trabajo.store')}}" method="POST">
          @csrf
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> nuevo detalle de trabajo</b></h3>
              <ul class="panel-controls">
              <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
              <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
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
                                  <input type="text" require id="cantidad" name="cantidad" class="form-control" placeholder="Cantidad"/>
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
                                    <input type="text" require id="estado" name="estado" class="form-control" placeholder="Estado"/>
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
                              <select class="form-control select" require data-live-search="true" id="servicio_id" name="servicio_id">
                                <option selected disabled value="0">Seleccione el servicio</option>
                                @foreach($servicios as $servicio)
                                <option value="{{$servicio->id}}">{{$servicio->nombre}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-2 control-label"> Empleado:</label>
                            <div class="col-md-9">
                              <select class="form-control select" require data-live-search="true" id="empleado_id" name="empleado_id">
                                <option selected disabled value="0">Seleccione el empleado</option>
                                @foreach($empleados as $empleado)
                                <option value="{{$empleado->id}}">{{$empleado->nombre}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label class="col-md-2 control-label"> Orden de trabajo:</label>
                              <div class="col-md-9">
                                <select class="form-control select" require data-live-search="true" id="orden_trabajo_id" name="orden_trabajo_id">
                                  <option selected disabled value="0">Seleccione la orden de trabajo</option>
                                  @foreach($orden_trabajos as $orden_trabajo)
                                  <option value="{{$orden_trabajo->id}}">{{$orden_trabajo->nombre}}</option>
                                  @endforeach
                                </select>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
              <div class="panel-footer">
              <a href="{{route('detalle_orden_trabajo.index')}}" class="btn btn-default">Cancelar</a>
              <button type="submit" class="btn btn-info pull-right">Registrar</button>
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
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>Registrar</b></h2>
@endsection

@section('menubar')
    <li><a href="#">Home</a></li>
    <li class="active">detalle de las ordenes de trabajos</li>
@endsection
