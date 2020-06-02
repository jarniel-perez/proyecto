<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalleordentrabajo extends Model
{
    protected $table = 'detalle_orden_trabajo';

    protected $fillable = [
      'cantidad',
      'estado',
      'servicio_id',
      'empleado_id',
      'orden_trabajo_id'];
  
    protected $hidden = ['created_at','updated_at'];
  
    public function servicio(){
      return $this->belongsTo('App\Servicio', 'servicio_id');
    }
  
    public function empleado(){
      return $this->belongsTo('App\Empleado', 'empleado_id');
    }
  
    public function ordentrabajo(){
      return $this->belongsTo('App\Ordentrabajo', 'orden_trabajo_id');
    }
}
