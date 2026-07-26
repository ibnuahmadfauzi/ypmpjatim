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
            'name' => 'Ahmad Fauzan',
            'email' => 'member1@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Budi Santoso',
            'email' => 'member2@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Citra Lestari',
            'email' => 'member3@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Dewi Anggraini',
            'email' => 'member4@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Eko Prasetyo',
            'email' => 'member5@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Fajar Ramadhan',
            'email' => 'member6@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Gilang Saputra',
            'email' => 'member7@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Hendra Wijaya',
            'email' => 'member8@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Intan Permata',
            'email' => 'member9@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Joko Susilo',
            'email' => 'member10@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);
    }
}
