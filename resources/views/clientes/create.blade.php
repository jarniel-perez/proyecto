@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('cliente.store')}}" method="POST">
          @csrf
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Nuevo Cliente</b></h3>
              <ul class="panel-controls">
              <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
              <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
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
                                <input type="text" require id="nombres" name="nombres" class="form-control" placeholder="Nombre del cliente"/>
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
                                  <input type="text" require id="direccion" name="direccion" class="form-control" placeholder="Dirección de residencia del cliente"/>
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
                                    <input type="text" require id="telefono" name="telefono" class="form-control" placeholder="Teléfono de contacto"/>
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
                                      <input type="text" require id="email" name="email" class="form-control" placeholder="ejemplo@ejemplo.****"/>
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
                                        <input type="text" require id="especial" name="especial" class="form-control" placeholder="cliente preferencial?"/>
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
                                          <input type="text" require id="clientescol" name="clientescol" class="form-control" placeholder="NI IDEA DE QUE ES ESTO"/>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        </div><!--fin panel body-->
              <div class="panel-footer">
                @if(count($errors)>0)
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
            @endif
              <a href="{{route('cliente.index')}}" class="btn btn-default">Cancelar</a>
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
    <li class="active">Clientes</li>
@endsection
