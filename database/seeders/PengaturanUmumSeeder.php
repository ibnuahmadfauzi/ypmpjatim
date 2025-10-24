<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengaturanUmumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengaturanumum')->truncate();

        DB::table('pengaturanumum')->insert([
            'alamat' => "Jl. KH. Abdul Fatah, No. 31, RT 003, RW 004, Jatinom, Kanigoro, kab. Blitar, 66171",
            'telepon' => '["85755550745", "81358085388"]',
            'email' => 'ypmpjatim@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}
