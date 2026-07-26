<?php

namespace Database\Seeders;

use App\Models\Pengaturan;
use Illuminate\Database\Seeder;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengaturan::truncate();

        Pengaturan::insert([
            [
                'judul' => 'Yayasan Pengembangan Mutu Pendidikan Jawa Timur',
                'deskripsi' => 'Menuju Pendidikan Berkualitas melalui Pelatihan, Penelitian, dan Akreditasi Terpadu',
                'tentang_perusahaan' => 'Yayasan Pengembangan Mutu Pendidikan - Jawa Timur (YPMP JATIM) adalah perusahaan yang berdedikasi untuk memajukan dunia pendidikan melalui penerbitan buku dan jurnal berkualitas serta berbagai program pelatihan, penelitian, dan akreditasi. Berdiri dengan komitmen untuk menyediakan sumber daya edukatif yang handal dan terpercaya, kami terus berupaya memberikan kontribusi nyata bagi kemajuan pendidikan di Indonesia.',
                'logo_navbar' => 'logo-ypmpjatim-text.png',
                'logo_perusahaan' => 'logo-ypmp.png',
                'banner' => 'banner.png',
                'alamat' => 'Jl. KH. Abdul Fatah, No. 31, RT 003, RW 004, Jatinom, Kanigoro, kab. Blitar, 66171',
                'notelp' => '085755550745, 081358085388',
                'email' => 'ypmpjatim@gmail.com',
                'hero' => 'hero.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
