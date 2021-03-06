<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_provider', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('account_id')->unsigned();
            $table->integer('provider_id')->unsigned();

            $table->timestamps();

            //Relaciones
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_provider');
    }
}
