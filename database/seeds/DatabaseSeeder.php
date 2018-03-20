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
        $this->call(KategorijeSeeder::class);
        $this->call(DrustvoSeeder::class);
        $this->call(TekmovanjeSeeder::class);
        $this->call(EkipeSeeder::class);
        $this->call(TekmovalciSeeder::class);
        $this->call(RezultatSeeder::class);
        $this->call(SerijeSeeder::class);
    }
}
