<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidangKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bidangkerja')->truncate();

        DB::table('bidangkerja')->insert([
            'nama_bidang' => "Penerbitan Buku",
            'deskripsi' => "YPMP JATIM menyediakan layanan penerbitan buku yang menyeluruh bagi berbagai kalangan, dengan paket lengkap yang mencakup semua proses dari penyuntingan hingga distribusi, memastikan kualitas profesional untuk meningkatkan literasi dan penyebaran pengetahuan.",
            'tautan' => "#",
            'gambar' => "penerbitan-buku.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('bidangkerja')->insert([
            'nama_bidang' => "Penerbitan Jurnal",
            'deskripsi' => "YPMP JATIM menawarkan layanan penerbitan jurnal dengan berbagai paket, termasuk cetak, elektronik, dan terakreditasi SINTA, didukung tim ahli untuk memastikan kualitas tinggi dalam setiap proses penerbitan dan distribusi, guna membantu peneliti dan akademisi menyebarkan hasil penelitian mereka secara luas dan diakui nasional.",
            'tautan' => "#",
            'gambar' => "penerbitan-jurnal.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('bidangkerja')->insert([
            'nama_bidang' => "Diklat, Workshop, dan Seminar",
            'deskripsi' => "YPMP JATIM berfokus pada penyelenggaraan program diklat, workshop, dan seminar pendidikan yang dirancang untuk meningkatkan kompetensi tenaga pendidik serta mendukung pengembangan institusi pendidikan.",
            'tautan' => "#",
            'gambar' => "diklat-workshop-dan-seminar.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('bidangkerja')->insert([
            'nama_bidang' => "Pengerjaan PMM",
            'deskripsi' => "YPMP JATIM menyediakan layanan pengerjaan Program Merdeka Mengajar (PMM) untuk guru, yang berfokus pada peningkatan kompetensi tenaga pendidik dan mendukung pengembangan institusi pendidikan.",
            'tautan' => "#",
            'gambar' => "pengerjaan-pmm.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('bidangkerja')->insert([
            'nama_bidang' => "Pengerjaan Akreditasi Sekolah",
            'deskripsi' => "YPMP JATIM berfokus pada pengerjaan akreditasi sekolah, membantu institusi pendidikan memenuhi standar nasional melalui proses evaluasi yang komprehensif dan profesional.",
            'tautan' => "#",
            'gambar' => "pengerjaan-akreditasi-sekolah.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('bidangkerja')->insert([
            'nama_bidang' => "Pengerjaan Sertifikasi Guru",
            'deskripsi' => "YPMP JATIM berfokus pada pengerjaan sertifikasi guru, mendukung tenaga pendidik dalam memenuhi kualifikasi profesional melalui proses sertifikasi yang sistematis dan berkualitas tinggi.",
            'tautan' => "#",
            'gambar' => "pengerjaan-sertifikasi-guru.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('bidangkerja')->insert([
            'nama_bidang' => "Konsultan Pendidikan",
            'deskripsi' => "Konsultan pendidikan membantu meningkatkan kualitas pembelajaran melalui perancangan kurikulum, manajemen sekolah, dan penerapan teknologi. Dengan pendekatan berbasis riset, mereka memberikan solusi inovatif untuk sistem pendidikan yang lebih efektif.",
            'tautan' => "#",
            'gambar' => "pengerjaan-sertifikasi-guru.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
