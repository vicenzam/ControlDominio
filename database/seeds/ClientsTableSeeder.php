<?php

use Illuminate\Database\Seeder;
use Appdominio\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Client::class, 30)->create();
    }
}
