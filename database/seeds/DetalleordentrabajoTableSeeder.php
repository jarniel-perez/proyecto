<?php

use Illuminate\Database\Seeder;

class DetalleordentrabajoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Detalleordentrabajo::class, 5)->create();
    }
}
