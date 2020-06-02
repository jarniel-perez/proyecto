<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordentrabajo extends Model
{
    protected $table = 'ordentrabajos';

    protected $fillable = [
      'nombre',
      'detalle',
      'fecha_entrada',
      'fecha_salida',
      'cliente_id'];
  
    protected $hidden = ['created_at','updated_at'];
  
    public function cliente(){
      return $this->belongsTo('App\Cliente', 'cliente_id');
    }
  
    public function detallesordenestrabajos(){
      return $this->hasMany('app\Detalleordentrabajo');
    }
}
