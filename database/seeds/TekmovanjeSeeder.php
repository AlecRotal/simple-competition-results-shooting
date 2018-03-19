<?php

use Illuminate\Database\Seeder;

class TekmovanjeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $datum1 = new DateTime("25-05-2018");
      DB::table('tekmovanjas')->insert([
        'name' => 'GSL 11. krog',
        'drustva_id' => 1,
        'dayOfBeginnig' => $datum1->format('Y-m-d h:i:s'),
        'dayOfEnd' => $datum1->format('Y-m-d h:i:s'),
      ]);
    }
}
