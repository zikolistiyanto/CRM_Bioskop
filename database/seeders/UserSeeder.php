<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User Admin
        User::create([
            'name' => 'Admin CRM',
            'email' => 'admin@crm.com',
            'password' => Hash::make('password123'), // password terenkripsi
            'role' => 'admin',
            'status' => 'active',
        ]);

        // User Staff
        User::create([
            'name' => 'Rina CS',
            'email' => 'rina@crm.com',
            'password' => Hash::make('password123'),
            'role' => 'staff',
            'status' => 'active',
        ]);

        // User Manager
        User::create([
            'name' => 'Manager John',
            'email' => 'john@crm.com',
            'password' => Hash::make('password123'),
            'role' => 'manager',
            'status' => 'active',
        ]);

        // Tambahkan user random menggunakan factory (opsional)
        User::factory(5)->create(); // 5 user random
    }
}
