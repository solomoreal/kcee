<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'staff_id' => 'ADM001',
            'name' => 'John Doe',
            'user_name' => 'johndoe',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'phone_number' => '1234567890',
            'photo' => null,
        ]);

    }
}
