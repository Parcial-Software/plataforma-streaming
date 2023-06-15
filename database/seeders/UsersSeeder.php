<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate(); // Opcional: eliminar registros existentes en la tabla

        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Bianca Romero',
                'email' => 'bianca@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Sebastian Padilla',
                'email' => 'sebastian@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Pablo Tardio',
                'email' => 'pablo@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Jorge Torrez',
                'email' => 'jorge@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Pedro Perez',
                'email' => 'pedro@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Roly Martinez',
                'email' => 'roly@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Oscar Oros',
                'email' => 'oscar@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Juan',
                'email' => 'juan@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Carlos Añez',
                'email' => 'carlos@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            
        ];

        User::insert($users);
    }
}
