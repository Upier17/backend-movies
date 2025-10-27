<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use Faker\Factory as Faker;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::truncate(); // Borra todos los registros existentes

        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Movie::create([
                'title' => $faker->sentence,
                'synopsis' => $faker->paragraph,
                'year' => $faker->year,
                'cover' => $faker->sentence, // Puedes poner URL si quieres
            ]);
        }
    }
}
