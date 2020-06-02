<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleOrdenTrabajoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_orden_trabajo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad');
            $table->integer('estado');
            $table->bigInteger('servicio_id')->unsigned();
            $table->bigInteger('empleado_id')->unsigned();
            $table->bigInteger('orden_trabajo_id')->unsigned();
  
            $table->foreign('servicio_id')
                  ->references('id')
                  ->on('servicios');
  
            $table->foreign('empleado_id')
                  ->references('id')
                  ->on('empleados');
  
            $table->foreign('orden_trabajo_id')
                  ->references('id')
                  ->on('ordentrabajos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_orden_trabajo');
    }
}
