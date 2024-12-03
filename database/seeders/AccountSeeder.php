<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Pastikan model User sudah dibuat
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    public function run()
    {
        // Admin account
        User::create([
            'name' => 'Admin',
            'email' => 'admin@dahlia.app',
            'password' => Hash::make('posyandu_dahlia'),
            'role' => 'admin',
        ]);

        // Kader account
        User::create([
            'name' => 'Kader',
            'email' => 'kader@dahlia.app',
            'password' => Hash::make('posyandu_dahlia'),
            'role' => 'kader',
        ]);
    }
}
