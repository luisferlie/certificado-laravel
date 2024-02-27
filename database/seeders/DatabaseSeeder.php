<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AlumnosSeeder;

use Database\Seeders\ProfesorSeeder;
use Database\Seeders\IdiomaSeeder;


use App\Models\Alumno;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([

            AlumnosSeeder::class,
            ProfesorSeeder::class,
            IdiomaSeeder::class,

        ]);

    }
}
