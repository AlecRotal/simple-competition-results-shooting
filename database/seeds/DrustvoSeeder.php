<?php

use Illuminate\Database\Seeder;

class DrustvoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('drustvas')->insert([
          'name' => 'Škofja Loka'
        ]);
    }
}
