<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicios';

  protected $fillable = [
    'nombre',
    'precio',
    'descripcion',
    'categoria_id'];

  protected $hidden = ['created_at','updated_at'];

  public function categoria(){
    return $this->belongsTo('App\Categoria', 'categoria_id');
  }

  public function serviciosclientesespeciales(){
    return $this->hasMany('App\Servicioclienteespecial');
  }

  public function detallesordenestrabajos(){
    return $this->hasMany('app\Detalleordentrabajo');
  }
}
