<?php

use Illuminate\Database\Seeder;

class TekmovalciSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tekmovalcis')->insert([
        'firstname' => 'Aleksandar',
        'lastname' => 'Hadžidaov',
        'drustva_id' => 1,
        'tekmovanja_id' => 1,
        'ekipe_id' => 1
      ]);
      DB::table('tekmovalcis')->insert([
        'firstname' => 'Iztok',
        'lastname' => 'Štular',
        'drustva_id' => 1,
        'tekmovanja_id' => 1,
        'ekipe_id' => 1
      ]);
      DB::table('tekmovalcis')->insert([
        'firstname' => 'Sandi',
        'lastname' => 'Masnec',
        'drustva_id' => 1,
        'tekmovanja_id' => 1,
        'ekipe_id' => 1
      ]);
    }
}
