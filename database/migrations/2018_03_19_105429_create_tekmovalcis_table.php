<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTekmovalcisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tekmovalcis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('drustva_id')->unsigned();
            $table->foreign('drustva_id')->references('id')->on('drustvas');
            $table->integer('tekmovanja_id')->unsigned();
            $table->foreign('tekmovanja_id')->references('id')->on('tekmovanjas');
            $table->integer('ekipe_id')->unsigned()->nullable();
            $table->foreign('ekipe_id')->references('id')->on('ekipes');


            // Will add other as I upgrade.

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
        Schema::dropIfExists('tekmovalcis');
    }
}
