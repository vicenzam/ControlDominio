<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('client_id')->unsigned();
            $table->integer('provider_id')->unsigned();
            $table->integer('account_id')->unsigned();

            $table->string('nombre', 128);
            $table->date('registro');
            $table->date('vence');
            $table->text('observacion')->nullable();

            $table->enum('estado',['ACTIVO', 'INACTIVO'])->dafault('ACTIVO');

            $table->timestamps();

            //Relaciones
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domains');
    }
}
