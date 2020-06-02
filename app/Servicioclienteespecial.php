<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicioclienteespecial extends Model
{
    protected $table = 'servicios_clientes_especiales';

  protected $fillable = [
    'precio',
    'servicio_id',
    'cliente_id'];

  protected $hidden = ['created_at','updated_at'];

  public function servicio(){
    return $this->belongsTo('App\Servicio', 'servicio_id');
  }

  public function cliente(){
    return $this->belongsTo('App\Cliente', 'cliente_id');
  }
}
