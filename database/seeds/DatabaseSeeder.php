<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClienteTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(EmpleadoTableSeeder::class);
        $this->call(ServicioTableSeeder::class);
        $this->call(OrdentrabajoTableSeeder::class);
        $this->call(ServicioclienteespecialTableSeeder::class);
        $this->call(DetalleordentrabajoTableSeeder::class);
    }
}
