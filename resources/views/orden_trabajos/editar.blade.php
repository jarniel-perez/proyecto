@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('orden_trabajo.update',['id'=>$orden_trabajo->id]) }}" method="POST">
          <div class="panel panel-warning">
            @csrf
          <input type="hidden" name="_method" value="PATCH">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Editar Orden de Trabajo</b></h3>
              <ul class="panel-controls">
                  <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                  <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
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
                                    <input type="text" require id="nombre" name="nombre" class="form-control" placeholder="Nombre de la orden de Trabajo" value="{{$orden_trabajo->nombre}}"/>
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
                                      <input type="text" require id="detalle" name="detalle" class="form-control" placeholder="Detalle de trabajo" value="{{$orden_trabajo->detalle}}"/>
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
                                        <input type="date" require id="fecha_entrada" name="fecha_entrada" class="form-control" placeholder="Fecha de inicio de trabajo" value="{{$orden_trabajo->fecha_entrada}}"/>
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
                                          <input type="date" require id="fecha_salida" name="fecha_salida" class="form-control" placeholder="Fecha de terminación de trabajo" value="{{$orden_trabajo->fecha_salida}}"/>
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
                                      <select class="form-control select" data-live-search="true" id="cliente_id" name="cliente_id">
                                        <option selected disabled value="0">Seleccione un cliente</option>
                                          @foreach($clientes as $cliente)
                                            @if($orden_trabajo->cliente_id==$cliente->id)
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
              <a href="{{route('orden_trabajo.index')}}" class="btn btn-default">Cancelar</a>
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
