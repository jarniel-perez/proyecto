@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('empleado.update',['id'=>$empleado->id]) }}" method="POST">
          <div class="panel panel-warning">
            @csrf
          <input type="hidden" name="_method" value="PATCH">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Editar Empleado</b></h3>
              <ul class="panel-controls">
                  <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                  <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
              </ul>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Cédula:</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="cedula" name="cedula" class="form-control" placeholder="Cédula del Empleado" value="{{$empleado->cedula}}"/>
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
                        <label class="col-md-2 control-label"> Nombre:</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="nombre" name="nombre" class="form-control" placeholder="Nombre del Empleado" value="{{$empleado->nombre}}"/>
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
                          <label class="col-md-2 control-label"> Apellido:</label>
                          <div class="col-md-9">
                              <div class="input-group">
                                  <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                  <input type="text" require id="apellido" name="apellido" class="form-control" placeholder="Apellido del Empleado" value="{{$empleado->apellido}}"/>
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
                                  <input type="text" require id="direccion" name="direccion" class="form-control" placeholder="Dirección de residencia del Empleado" value="{{$empleado->direccion}}"/>
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
                                    <input type="text" require id="telefono" name="telefono" class="form-control" placeholder="Teléfono de contacto" value="{{$empleado->telefono}}"/>
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
                                      <input type="text" require id="email" name="email" class="form-control" placeholder="Correo Electrónico del Empleado" value="{{$empleado->email}}"/>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                    </div><!--fin panel body-->
              <div class="panel-footer">
              <a href="{{route('empleado.index')}}" class="btn btn-default">Cancelar</a>
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
