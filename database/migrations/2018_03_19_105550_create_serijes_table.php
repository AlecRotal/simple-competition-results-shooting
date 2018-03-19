<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerijesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serijes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rezultat_id')->unsigned();
            $table->foreign('rezultat_id')->references('id')->on('rezultats');
            $table->float('strel_1')->nullable();
            $table->float('strel_2')->nullable();
            $table->float('strel_3')->nullable();
            $table->float('strel_4')->nullable();
            $table->float('strel_5')->nullable();
            $table->float('strel_6')->nullable();
            $table->float('strel_7')->nullable();
            $table->float('strel_8')->nullable();
            $table->float('strel_9')->nullable();
            $table->float('strel_10')->nullable();
            $table->integer('notranje_desetke');
            $table->float('skupaj_streli')->default(0);
            $table->integer('num_serije'); // For correct order of serije.

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
        Schema::dropIfExists('serijes');
    }
}
