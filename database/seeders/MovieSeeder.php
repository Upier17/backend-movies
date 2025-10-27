<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    public function run()
    {
        Movie::create([
            'title' => 'Mi película favorita',
            'synopsis' => 'Una historia épica',
            'year' => 2025,
            'cover' => 'imagen.jpg'
        ]);
    }
}
