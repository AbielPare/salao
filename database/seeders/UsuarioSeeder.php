<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;


class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    Usuario::create([
        'nome' => 'Admin',
        'email' => 'admin@email.com',
        'senha' => Hash::make('123456'),
    ]);
}
}
