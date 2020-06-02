@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('cliente.update',['id'=>$cliente->id]) }}" method="POST">
          <div class="panel panel-warning">
            @csrf
          <input type="hidden" name="_method" value="PATCH">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Editar Cliente</b></h3>
              <ul class="panel-controls">
                  <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                  <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
              </ul>
            </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-2 control-label"> Nombres:</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" require id="nombres" name="nombres" class="form-control" placeholder="Nombre del cliente" value="{{$cliente->nombres}}"/>
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
                              <label class="col-md-2 control-label"> Dirección:</label>
                              <div class="col-md-9">
                                  <div class="input-group">
                                      <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                      <input type="text" require id="direccion" name="direccion" class="form-control" placeholder="Dirección de residencia del cliente" value="{{$cliente->direccion}}"/>
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
                                <label class="col-md-2 control-label"> Teléfono:</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" require id="telefono" name="telefono" class="form-control" placeholder="Teléfono de contacto" value="{{$cliente->telefono}}"/>
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
                                  <label class="col-md-2 control-label"> Correo Electrónico:</label>
                                  <div class="col-md-9">
                                      <div class="input-group">
                                          <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                          <input type="text" require id="email" name="email" class="form-control" placeholder="ejemplo@ejemplo.****" value="{{$cliente->email}}"/>
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
                                    <label class="col-md-2 control-label"> especial:</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" require id="especial" name="especial" class="form-control" placeholder="cliente preferencial?" value="{{$cliente->especial}}"/>
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
                                      <label class="col-md-2 control-label"> No sé qué es ClientesCol:</label>
                                      <div class="col-md-9">
                                          <div class="input-group">
                                              <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                              <input type="text" require id="clientescol" name="clientescol" class="form-control" placeholder="NI IDEA DE QUE ES ESTO" value="{{$cliente->clientescol}}"/>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            </div><!--fin panel body-->
              <div class="panel-footer">
              <a href="{{route('cliente.index')}}" class="btn btn-default">Cancelar</a>
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
