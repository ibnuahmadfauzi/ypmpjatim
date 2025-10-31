<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        // Seeder untuk admin utama
        User::create([
            'fullname' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'avatar' => 'default.png',
            'role' => 'admin',
        ]);

        // Seeder tambahan (opsional)
        User::create([
            'fullname' => 'Ibnu Ahmad Fauzi',
            'username' => 'fauzi',
            'email' => 'fauzi@example.com',
            'password' => Hash::make('password123'),
            'avatar' => 'fauzi.png',
            'role' => 'member',
        ]);
    }
}
