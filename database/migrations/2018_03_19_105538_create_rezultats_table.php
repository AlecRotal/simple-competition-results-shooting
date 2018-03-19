<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRezultatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezultats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategorija_id')->unsigned();
            $table->foreign('kategorija_id')->references('id')->on('kategorijas');
            $table->integer('disciplina_id')->unsigned();
            $table->foreign('disciplina_id')->references('id')->on('disciplinas');
            $table->integer('tekmovalci_id')->unsigned();
            $table->foreign('tekmovalci_id')->references('id')->on('tekmovalcis');

            // Will add as I upgrade.

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rezultats');
    }
}
