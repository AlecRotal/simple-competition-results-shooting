<?php

use Illuminate\Database\Seeder;

class SerijeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('serijes')->insert([
        'rezultat_id' => 1,
        'strel_1' => 10,
        'strel_2' => 10,
        'strel_3' => 10,
        'strel_4' => 10,
        'strel_5' => 10,
        'strel_6' => 10,
        'strel_7' => 10,
        'strel_8' => 10,
        'strel_9' => 10,
        'strel_10' => 10,
        'notranje_desetke'  => 1,
        'skupaj_streli' => 100,
        'num_serije' => 1
      ]);
      DB::table('serijes')->insert([
        'rezultat_id' => 1,
        'strel_1' => 9,
        'strel_2' => 9,
        'strel_3' => 9,
        'strel_4' => 9,
        'strel_5' => 9,
        'strel_6' => 9,
        'strel_7' => 9,
        'strel_8' => 9,
        'strel_9' => 9,
        'strel_10' => 10,
        'notranje_desetke'  => 1,
        'skupaj_streli' => 91,
        'num_serije' => 2
      ]);
      DB::table('serijes')->insert([
        'rezultat_id' => 1,
        'strel_1' => 9,
        'strel_2' => 9,
        'strel_3' => 9,
        'strel_4' => 9,
        'strel_5' => 9,
        'strel_6' => 9,
        'strel_7' => 9,
        'strel_8' => 9,
        'strel_9' => 9,
        'strel_10' => 10,
        'notranje_desetke'  => 1,
        'skupaj_streli' => 91,
        'num_serije' => 3
      ]);

      DB::table('serijes')->insert([
        'rezultat_id' => 1,
        'strel_1' => 9,
        'strel_2' => 9,
        'strel_3' => 9,
        'strel_4' => 9,
        'strel_5' => 9,
        'strel_6' => 10,
        'strel_7' => 9,
        'strel_8' => 9,
        'strel_9' => 9,
        'strel_10' => 10,
        'notranje_desetke'  => 1,
        'skupaj_streli' => 92,
        'num_serije' => 4
      ]);


      DB::table('serijes')->insert([
        'rezultat_id' => 2,
        'strel_1' => 9,
        'strel_2' => 10,
        'strel_3' => 10,
        'strel_4' => 10,
        'strel_5' => 10,
        'strel_6' => 10,
        'strel_7' => 10,
        'strel_8' => 10,
        'strel_9' => 10,
        'strel_10' => 10,
        'notranje_desetke'  => 1,
        'skupaj_streli' => 99,
        'num_serije' => 1
      ]);
      DB::table('serijes')->insert([
        'rezultat_id' => 2,
        'strel_1' => 10,
        'strel_2' => 9,
        'strel_3' => 9,
        'strel_4' => 9,
        'strel_5' => 9,
        'strel_6' => 9,
        'strel_7' => 9,
        'strel_8' => 9,
        'strel_9' => 9,
        'strel_10' => 10,
        'notranje_desetke'  => 1,
        'skupaj_streli' => 92,
        'num_serije' => 2
      ]);
      DB::table('serijes')->insert([
        'rezultat_id' => 2,
        'strel_1' => 9,
        'strel_2' => 8,
        'strel_3' => 9,
        'strel_4' => 9,
        'strel_5' => 9,
        'strel_6' => 9,
        'strel_7' => 9,
        'strel_8' => 9,
        'strel_9' => 9,
        'strel_10' => 10,
        'notranje_desetke'  => 1,
        'skupaj_streli' => 90,
        'num_serije' => 3
      ]);

      DB::table('serijes')->insert([
        'rezultat_id' => 2,
        'strel_1' => 9,
        'strel_2' => 9,
        'strel_3' => 9,
        'strel_4' => 10,
        'strel_5' => 9,
        'strel_6' => 10,
        'strel_7' => 9,
        'strel_8' => 9,
        'strel_9' => 9,
        'strel_10' => 10,
        'notranje_desetke'  => 1,
        'skupaj_streli' => 93,
        'num_serije' => 4
      ]);



            DB::table('serijes')->insert([
              'rezultat_id' => 3,
              'strel_1' => 9,
              'strel_2' => 10,
              'strel_3' => 10,
              'strel_4' => 10,
              'strel_5' => 10,
              'strel_6' => 9,
              'strel_7' => 10,
              'strel_8' => 10,
              'strel_9' => 10,
              'strel_10' => 10,
              'notranje_desetke'  => 1,
              'skupaj_streli' => 98,
              'num_serije' => 1
            ]);
            DB::table('serijes')->insert([
              'rezultat_id' => 3,
              'strel_1' => 10,
              'strel_2' => 9,
              'strel_3' => 9,
              'strel_4' => 10,
              'strel_5' => 9,
              'strel_6' => 9,
              'strel_7' => 9,
              'strel_8' => 9,
              'strel_9' => 9,
              'strel_10' => 10,
              'notranje_desetke'  => 1,
              'skupaj_streli' => 93,
              'num_serije' => 2
            ]);
            DB::table('serijes')->insert([
              'rezultat_id' => 3,
              'strel_1' => 9,
              'strel_2' => 8,
              'strel_3' => 9,
              'strel_4' => 10,
              'strel_5' => 9,
              'strel_6' => 9,
              'strel_7' => 9,
              'strel_8' => 9,
              'strel_9' => 9,
              'strel_10' => 10,
              'notranje_desetke'  => 1,
              'skupaj_streli' => 91,
              'num_serije' => 3
            ]);

            DB::table('serijes')->insert([
              'rezultat_id' => 3,
              'strel_1' => 9,
              'strel_2' => 9,
              'strel_3' => 9,
              'strel_4' => 10,
              'strel_5' => 9,
              'strel_6' => 10,
              'strel_7' => 9,
              'strel_8' => 10,
              'strel_9' => 9,
              'strel_10' => 10,
              'notranje_desetke'  => 1,
              'skupaj_streli' => 94,
              'num_serije' => 4
            ]);


    }
}
