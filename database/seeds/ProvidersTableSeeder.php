<?php

use Illuminate\Database\Seeder;
use Appdominio\Provider;

class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Provider::class, 10)->create();
    }
}
