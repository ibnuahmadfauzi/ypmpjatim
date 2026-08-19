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
            'username' => 'administrator',
            'email' => 'admin@gmail.com',
            'avatar' => 'foto.jpg',
            'password' => Hash::make('123456'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Admin Yayasan',
            'username' => 'adminyayasan',
            'email' => 'ypmpjatim@gmail.com',
            'avatar' => 'foto.jpg',
            'password' => Hash::make('123456'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Ahmad Fauzan',
            'username' => 'ahmadfauzan',
            'email' => 'member1@gmail.com',
            'avatar' => 'foto.jpg',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Budi Santoso',
            'username' => 'budisantoso',
            'email' => 'member2@gmail.com',
            'avatar' => 'foto.jpg',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Citra Lestari',
            'username' => 'citralestari',
            'email' => 'member3@gmail.com',
            'avatar' => 'foto.jpg',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Dewi Anggraini',
            'username' => 'dewianggraini',
            'email' => 'member4@gmail.com',
            'avatar' => 'foto.jpg',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Eko Prasetyo',
            'username' => 'ekoprasetyo',
            'email' => 'member5@gmail.com',
            'avatar' => 'foto.jpg',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Fajar Ramadhan',
            'username' => 'fajarramadhan',
            'email' => 'member6@gmail.com',
            'avatar' => 'foto.jpg',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Gilang Saputra',
            'username' => 'gilangsaputra',
            'email' => 'member7@gmail.com',
            'avatar' => 'foto.jpg',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Hendra Wijaya',
            'username' => 'hendrawijaya',
            'email' => 'member8@gmail.com',
            'avatar' => 'foto.jpg',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Intan Permata',
            'username' => 'intanpermata',
            'email' => 'member9@gmail.com',
            'avatar' => 'foto.jpg',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);

        User::create([
            'name' => 'Joko Susilo',
            'username' => 'jokosusilo',
            'email' => 'member10@gmail.com',
            'avatar' => 'foto.jpg',
            'password' => Hash::make('123456'),
            'role' => 'member',
        ]);
    }
}
