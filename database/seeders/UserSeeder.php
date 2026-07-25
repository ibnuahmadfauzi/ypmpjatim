<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::truncate();

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Admin Yayasan',
            'email' => 'ypmpjatim@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Budi Santoso',
            'email' => 'member1@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Siti Aisyah',
            'email' => 'member2@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);
    }
}
