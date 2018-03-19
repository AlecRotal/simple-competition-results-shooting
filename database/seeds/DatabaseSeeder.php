<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DisciplinaSeeder::class);
        $this->call(KategorijaSeeder::class);
        $this->call(DrustvoSeeder::class);
        $this->call(TekmovanjeSeeder::class);
        $this->call(TekmovalciSeeder::class);
        $this->call(EkipeSeeder::class);
        $this->call(RezultatiSeeder::class);
        $this->call(SerijeSeeder::class);
    }
}
