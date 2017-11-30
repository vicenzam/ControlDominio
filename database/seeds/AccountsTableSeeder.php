<?php

use Illuminate\Database\Seeder;
use Appdominio\Account;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Account::class, 5)->create()->each(function(Appdominio\Account $account){
        	$account->providers()->attach([
        		rand(1,5),
        		rand(6,10),
        	]);
        });
    }
}
