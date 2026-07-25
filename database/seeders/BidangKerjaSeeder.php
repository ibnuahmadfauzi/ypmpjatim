<?php

namespace Database\Seeders;

use App\Models\BidangKerja;
use Illuminate\Database\Seeder;

class BidangKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BidangKerja::truncate();

        BidangKerja::insert([
            [
                'gambar' => 'penerbitan-buku.jpg',
                'judul' => 'Penerbitan Buku',
                'deskripsi' => 'YPMP JATIM menyediakan layanan penerbitan buku yang menyeluruh bagi berbagai kalangan, dengan paket lengkap yang mencakup semua proses dari penyuntingan hingga distribusi, memastikan kualitas profesional untuk meningkatkan literasi dan penyebaran pengetahuan.',
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gambar' => 'penerbitan-jurnal.jpg',
                'judul' => 'Penerbitan Jurnal',
                'deskripsi' => 'YPMP JATIM menawarkan layanan penerbitan jurnal dengan berbagai paket, termasuk cetak, elektronik, dan terakreditasi SINTA, didukung tim ahli untuk memastikan kualitas tinggi dalam setiap proses penerbitan dan distribusi, guna membantu peneliti dan akademisi menyebarkan hasil penelitian mereka secara luas dan diakui nasional.',
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gambar' => 'diklat-workshop-dan-seminar.jpg',
                'judul' => 'Diklat, Workshop, dan Seminar',
                'deskripsi' => 'YPMP JATIM berfokus pada penyelenggaraan program diklat, workshop, dan seminar pendidikan yang dirancang untuk meningkatkan kompetensi tenaga pendidik serta mendukung pengembangan institusi pendidikan.',
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gambar' => 'pengerjaan-pmm.jpg',
                'judul' => 'Pengerjaan PMM',
                'deskripsi' => 'YPMP JATIM menyediakan layanan pengerjaan Program Merdeka Mengajar (PMM) untuk guru, yang berfokus pada peningkatan kompetensi tenaga pendidik dan mendukung pengembangan institusi pendidikan.',
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gambar' => 'pengerjaan-akreditasi-sekolah.jpg',
                'judul' => 'Pengerjaan Akreditasi Sekolah',
                'deskripsi' => 'YPMP JATIM berfokus pada pengerjaan akreditasi sekolah, membantu institusi pendidikan memenuhi standar nasional melalui proses evaluasi yang komprehensif dan profesional.',
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gambar' => 'pengerjaan-sertifikasi-guru.jpg',
                'judul' => 'Pengerjaan Sertifikasi Guru',
                'deskripsi' => 'YPMP JATIM berfokus pada pengerjaan sertifikasi guru, mendukung tenaga pendidik dalam memenuhi kualifikasi profesional melalui proses sertifikasi yang sistematis dan berkualitas tinggi.',
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gambar' => 'konsultasi-pendidikan.jpg',
                'judul' => 'Konsultan Pendidikan',
                'deskripsi' => 'Konsultan pendidikan membantu meningkatkan kualitas pembelajaran melalui perancangan kurikulum, manajemen sekolah, dan penerapan teknologi. Dengan pendekatan berbasis riset, mereka memberikan solusi inovatif untuk sistem pendidikan yang lebih efektif.',
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
