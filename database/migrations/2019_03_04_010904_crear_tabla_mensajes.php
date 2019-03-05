<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMensajes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mensajes', function (Blueprint $table) {
         $table->increments('id');
         $table->timestamps();
         $table->string('nombre',200);
         $table->string('nick',200)->nullable();
         $table->string('mail',200);
         $table->string('telefono',200)->nullable();
         $table->string('mensaje',400);
         $table->integer('user_id')->nullable();
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensajes');
    }
}
