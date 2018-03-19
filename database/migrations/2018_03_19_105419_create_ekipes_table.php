<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEkipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekipes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('drustva_id')->unsigned();
            $table->foreign('drustva_id')->references('id')->on('drustvas');

            // Will add other as I upgrade APP.

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
        Schema::dropIfExists('ekipes');
    }
}
