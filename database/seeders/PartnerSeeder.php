<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partner')->truncate();

        DB::table('partner')->insert([
            'nama_partner' => "MNC Publishing",
            'logo' => "mncpublishing.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('partner')->insert([
            'nama_partner' => "Ezekiel Publishing",
            'logo' => "ezekielpublishing.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('partner')->insert([
            'nama_partner' => "Media Satra Atiga",
            'logo' => "msa.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('partner')->insert([
            'nama_partner' => "Praise Books",
            'logo' => "praisebooks.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('partner')->insert([
            'nama_partner' => "BCN",
            'logo' => "bcn.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
