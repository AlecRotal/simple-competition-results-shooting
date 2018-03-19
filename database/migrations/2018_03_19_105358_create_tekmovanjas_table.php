<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTekmovanjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tekmovanjas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('drustva_id')->unsigned();
            $table->foreign('drustva_id')->references('id')->on('drustvas');
            $table->date('dayOfBeginnig');
            $table->date('dayOfEnd');

            // Will add other info later when upgrading app.

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
        Schema::dropIfExists('tekmovanjas');
    }
}
