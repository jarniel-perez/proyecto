@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('orden_trabajo.store')}}" method="POST">
          @csrf
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Nueva orden de trabajo</b></h3>
              <ul class="panel-controls">
              <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
              <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
              </ul>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Nombre:</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="nombre" name="nombre" class="form-control" placeholder="Nombre del Trabajo"/>
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
                          <label class="col-md-2 control-label"> Detalle:</label>
                          <div class="col-md-9">
                              <div class="input-group">
                                  <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                  <input type="text" require id="detalle" name="detalle" class="form-control" placeholder="Detalle del Trabajo"/>
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
                            <label class="col-md-2 control-label"> Fecha de Entrada:</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="date" require id="fecha_entrada" name="fecha_entrada" class="form-control" placeholder="Fecha de inicio de Trabajo"/>
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
                              <label class="col-md-2 control-label"> Fecha de Salida:</label>
                              <div class="col-md-9">
                                  <div class="input-group">
                                      <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                      <input type="date" require id="fecha_salida" name="fecha_salida" class="form-control" placeholder="Fecha de terminación de Trabajo"/>
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
                              <label class="col-md-2 control-label"> Cliente:</label>
                              <div class="col-md-9">
                                <select class="form-control select" require data-live-search="true" id="cliente_id" name="cliente_id">
                                  <option selected disabled value="0">Seleccione el Cliente</option>
                                  @foreach($clientes as $cliente)
                                  <option value="{{$cliente->id}}">{{$cliente->nombres}}</option>
                                  @endforeach
                                </select>
                              </div>
                          </div>
                      </div>
                    </div>
              <div class="panel-footer">
              <a href="{{route('orden_trabajo.index')}}" class="btn btn-default">Cancelar</a>
              <button type="submit" class="btn btn-info pull-right">Registrar</button>
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
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>Registrar</b></h2>
@endsection

@section('menubar')
    <li><a href="#">Home</a></li>
    <li class="active">Ordenes de Trabajos</li>
@endsection
