<?php

use Illuminate\Database\Seeder;

class RezultatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('kategorijas')->insert([
            'kategorija_id' => 11,
            'disciplina_id' => 3,
            'tekmovalci_id' => 1
          ]);
          DB::table('kategorijas')->insert([
            'kategorija_id' => 11,
            'disciplina_id' => 3,
            'tekmovalci_id' => 2
          ]);
          DB::table('kategorijas')->insert([
            'kategorija_id' => 11,
            'disciplina_id' => 3,
            'tekmovalci_id' => 3        
          ]);



    }
}
