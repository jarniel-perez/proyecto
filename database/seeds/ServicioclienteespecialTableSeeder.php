<?php

use Illuminate\Database\Seeder;

class ServicioclienteespecialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Servicioclienteespecial::class, 5)->create();
    }
}
