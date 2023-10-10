<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = ['nom' => 'Elmarzougui', 'prenom' => 'Abdelghafour', 'email' => 'admin@gmail.com', 'password' => Hash::make('password'), 'email_verified_at' => now()];

        User::create($admin);
    }
}
