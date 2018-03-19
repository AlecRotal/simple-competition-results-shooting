<?php

use Illuminate\Database\Seeder;

class KategorijeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('kategorijas')->insert([
        'name' => 'Cicibani'
      ]);
      DB::table('kategorijas')->insert([
        'name' => 'Cicibanke'
      ]);
      DB::table('kategorijas')->insert([
        'name' => 'Mlajši Pionirji'
      ]);
      DB::table('kategorijas')->insert([
        'name' => 'Mlajše Pionirke'
      ]);
      DB::table('kategorijas')->insert([
        'name' => 'Pionirji'
      ]);
      DB::table('kategorijas')->insert([
        'name' => 'Pionirke'
      ]);
      DB::table('kategorijas')->insert([
        'name' => 'Kadeti'
      ]);
      DB::table('kategorijas')->insert([
        'name' => 'Kadetinje'
      ]);
      DB::table('kategorijas')->insert([
        'name' => 'Mladinci'
      ]);
      DB::table('kategorijas')->insert([
        'name' => 'Mladinke'
      ]);
      DB::table('kategorijas')->insert([
        'name' => 'Člani'
      ]);
      DB::table('kategorijas')->insert([
        'name' => 'Članice'
      ]);
      DB::table('kategorijas')->insert([
        'name' => 'Veterani'
      ]);
      DB::table('kategorijas')->insert([
        'name' => 'Veteranke'
      ]);
      DB::table('kategorijas')->insert([
        'name' => 'Veterani do 60 let'
      ]);
      DB::table('kategorijas')->insert([
        'name' => 'Veteranke do 50 let'
      ]);
      DB::table('kategorijas')->insert([
        'name' => 'Veterani nad 60 let'
      ]);
      DB::table('kategorijas')->insert([
        'name' => 'Veteranke nad 50 let'
      ]);
    }
}
