<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

  protected $fillable = [
    'cedula',
    'nombre',
    'apellido',
    'direccion',
    'telefono',
    'email'];

  protected $hidden = ['created_at','updated_at'];

  public function detallesordenestrabajos(){
    return $this->hasMany('app\Detalleordentrabajo');
  }
}
