<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPlayers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->timestamps();
            $table->string('codigo');
            $table->char('nick',100);
            $table->float('galeones',8,2)->default(0);
            $table->string('historia')->nullable();
            $table->string('mision')->nullable();
            $table->integer('casa')->nullable();
            $table->integer('colegio')->nullable();
            $table->integer('año')->default(0);
            $table->boolean('staff')->default(0);
            $table->boolean('enlazado')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
