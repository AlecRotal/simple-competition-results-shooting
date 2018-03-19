<?php

use Illuminate\Database\Seeder;

class EkipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('ekipes')->insert([
        'name' => 'Škofja Loka 2',
        'drustva_id' => 1
      ]);
    }
}
