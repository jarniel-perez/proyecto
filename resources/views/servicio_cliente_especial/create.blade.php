@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('servicio_cliente_especial.store')}}" method="POST">
          @csrf
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Agregar Servicio para Cliente Especial</b></h3>
              <ul class="panel-controls">
              <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
              <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
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
                                  <input type="text" require id="precio" name="precio" class="form-control" placeholder="Precio del servicio especial"/>
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
                              <label class="col-md-2 control-label"> Cliente:</label>
                              <div class="col-md-9">
                                <select class="form-control select" require data-live-search="true" id="cliente_id" name="cliente_id">
                                  <option selected disabled value="0">Seleccione el cliente</option>
                                  @foreach($clientes as $cliente)
                                  <option value="{{$cliente->id}}">{{$cliente->nombres}}</option>
                                  @endforeach
                                </select>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
              <div class="panel-footer">
              <a href="{{route('servicio_cliente_especial.index')}}" class="btn btn-default">Cancelar</a>
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
    <li class="active">Servicios para clientes especiales</li>
@endsection
