<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([CompetenciasSeeder::class]);
        $this->call([ResultadosSeeder::class]);
        $this->call([SemaforosSeeder::class]);
        $this->call([ProgramasSeeder::class]);
        $this->call([FichasSeeder::class]);
    }
}
