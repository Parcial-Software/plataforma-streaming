<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generos = [
            ['nombre' => 'Pop', 'imagen' => Storage::url('images/generos/pop.jpg')],
            ['nombre' => 'Hip hop', 'imagen' => Storage::url('images/generos/hip hop.jpg')],
            ['nombre' => 'Rock', 'imagen' => Storage::url('images/generos/rock.jpg')],
            ['nombre' => 'Romantico', 'imagen' => Storage::url('images/generos/romantico.jpg')],
            ['nombre' => 'Electrónica', 'imagen' => Storage::url('images/generos/Tiesto.jpg')],
            ['nombre' => 'Reguetón', 'imagen' => Storage::url('images/generos/regueton.jpeg')],
            ['nombre' => 'Country', 'imagen' => Storage::url('images/generos/country.jpg')],
            ['nombre' => 'K-pop', 'imagen' => Storage::url('images/generos/k-pop.jpg')],
            ['nombre' => 'Jazz', 'imagen' => Storage::url('images/generos/jazz.jpg')],
            ['nombre' => 'Clásica', 'imagen' => Storage::url('images/generos/clasica.jpg')],
            ['nombre' => 'Deportivo', 'imagen' => Storage::url('images/generos/deportivo.jpg')],
        ];
        
        foreach ($generos as $genero) {
            Genero::create($genero);
        }
    }
}
