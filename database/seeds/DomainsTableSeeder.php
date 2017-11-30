<?php

use Illuminate\Database\Seeder;
use Appdominio\Domain;

class DomainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Domain::class, 30)->create();
    }
}
