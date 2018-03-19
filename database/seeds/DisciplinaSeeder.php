<?php

use Illuminate\Database\Seeder;

class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disciplinas')->insert([
          'name' => 'Serijska zračna puška'
        ]);
        DB::table('disciplinas')->insert([
          'name' => 'Standard zračna puška'
        ]);
        DB::table('disciplinas')->insert([
          'name' => 'zračna pištola'
        ]);
    }
}
