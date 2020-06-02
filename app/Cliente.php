<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

  protected $fillable = [
    'nombres',
    'direccion',
    'telefono',
    'email',
    'especial',
    'clientescol'];

  protected $hidden = ['created_at','updated_at'];

  public function ordenestrabajos(){
    return $this->hasMany('App\Ordentrabajo');
  }

  public function serviciosclientesespeciales(){
    return $this->hasMany('App\Servicioclienteespecial');
  }
}
