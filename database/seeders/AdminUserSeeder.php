<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Pastikan model User diimport

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Membuat user admin
        User::create([
            'name' => 'Admin JS',
            'email' => 'admin@gmail.com',
            'password' => 'admin123', 
            'role' => 'admin', 
        ]);
    }
}
