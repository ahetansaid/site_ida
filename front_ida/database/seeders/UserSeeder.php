<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {

        User::create([
            'name' => 'Admin',
            'email' => 'codeur.275@gmail.com',
            'password' => Hash::make('admin123'), // Assurez-vous de hacher le mot de passe
        ]);

    }
}
