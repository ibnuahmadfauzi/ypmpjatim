<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artikel::truncate();

        Artikel::create([
            'judul' => 'Transformasi Digital dalam Dunia Pendidikan',
            'slug' => Str::slug('Transformasi Digital dalam Dunia Pendidikan'),
            'thumbnail' => '1786245030.jpg',
            'konten' => '
        <p>Transformasi digital telah membawa perubahan besar dalam dunia pendidikan. Teknologi memberikan berbagai kemudahan dalam proses pembelajaran dan penyampaian informasi.</p>
        <p>Pemanfaatan teknologi membantu guru menciptakan pembelajaran yang lebih interaktif dan menarik. Peserta didik juga dapat mengakses berbagai sumber belajar secara lebih mudah.</p>
        <p>Dengan penerapan teknologi yang tepat, pendidikan dapat menjadi lebih fleksibel, efektif, dan sesuai dengan kebutuhan perkembangan zaman.</p>
    ',
            'kategori' => 'Pendidikan, Kesehatan',
            'dilihat' => 1,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Artikel::create([
            'judul' => 'Pentingnya Literasi Digital bagi Pelajar',
            'slug' => Str::slug('Pentingnya Literasi Digital bagi Pelajar'),
            'thumbnail' => '1786245030.jpg',
            'konten' => '
        <p>Literasi digital merupakan kemampuan penting yang harus dimiliki oleh pelajar di era perkembangan teknologi saat ini.</p>
        <p>Pelajar perlu mampu menggunakan teknologi sekaligus memahami dan mengevaluasi informasi yang diperoleh melalui internet.</p>
        <p>Dengan literasi digital yang baik, pelajar dapat menggunakan teknologi secara aman, bijak, kreatif, dan produktif.</p>
    ',
            'kategori' => 'Pendidikan, Kesehatan',
            'dilihat' => 1,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Artikel::create([
            'judul' => 'Pemanfaatan Teknologi untuk Pembelajaran Modern',
            'slug' => Str::slug('Pemanfaatan Teknologi untuk Pembelajaran Modern'),
            'thumbnail' => '1786245030.jpg',
            'konten' => '
        <p>Perkembangan teknologi memberikan peluang besar untuk menciptakan pembelajaran yang lebih menarik dan interaktif.</p>
        <p>Guru dapat menggunakan berbagai media digital seperti video, animasi, presentasi, dan aplikasi pembelajaran untuk mendukung proses belajar.</p>
        <p>Penggunaan teknologi harus tetap disesuaikan dengan tujuan pembelajaran agar memberikan manfaat yang maksimal bagi peserta didik.</p>
    ',
            'kategori' => 'Pendidikan, Kesehatan',
            'dilihat' => 1,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Artikel::create([
            'judul' => 'Peran Guru di Era Digital',
            'slug' => Str::slug('Peran Guru di Era Digital'),
            'thumbnail' => '1786245030.jpg',
            'konten' => '
        <p>Perkembangan teknologi mengubah cara guru dalam melaksanakan proses pembelajaran di sekolah.</p>
        <p>Guru tidak hanya berperan sebagai penyampai materi, tetapi juga sebagai fasilitator yang membantu peserta didik menemukan dan mengembangkan pengetahuan.</p>
        <p>Kemampuan guru dalam memanfaatkan teknologi menjadi salah satu faktor penting dalam menciptakan pembelajaran yang relevan dengan kebutuhan peserta didik.</p>
    ',
            'kategori' => 'Pendidikan, Kesehatan',
            'dilihat' => 1,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Artikel::create([
            'judul' => 'Meningkatkan Kreativitas Siswa melalui Teknologi',
            'slug' => Str::slug('Meningkatkan Kreativitas Siswa melalui Teknologi'),
            'thumbnail' => '1786245030.jpg',
            'konten' => '
        <p>Teknologi dapat menjadi media yang efektif untuk membantu peserta didik mengembangkan kreativitas mereka.</p>
        <p>Berbagai aplikasi digital memungkinkan siswa membuat desain, video, tulisan, presentasi, dan berbagai karya lainnya.</p>
        <p>Dengan bimbingan yang tepat dari guru, teknologi dapat mendorong siswa untuk menghasilkan karya yang inovatif dan bermanfaat.</p>
    ',
            'kategori' => 'Pendidikan, Kesehatan',
            'dilihat' => 1,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Artikel::create([
            'judul' => 'Manfaat Internet sebagai Sumber Belajar',
            'slug' => Str::slug('Manfaat Internet sebagai Sumber Belajar'),
            'thumbnail' => '1786245030.jpg',
            'konten' => '
        <p>Internet menyediakan berbagai sumber informasi yang dapat dimanfaatkan untuk mendukung proses pembelajaran.</p>
        <p>Peserta didik dapat mencari artikel, video pembelajaran, jurnal, dan berbagai referensi lain untuk memperluas pengetahuan mereka.</p>
        <p>Namun, penggunaan internet harus dilakukan secara bijak dengan memastikan informasi yang digunakan berasal dari sumber yang terpercaya.</p>
    ',
            'kategori' => 'Pendidikan, Kesehatan',
            'dilihat' => 1,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Artikel::create([
            'judul' => 'Pendidikan Berkualitas di Era Teknologi',
            'slug' => Str::slug('Pendidikan Berkualitas di Era Teknologi'),
            'thumbnail' => '1786245030.jpg',
            'konten' => '
        <p>Pendidikan berkualitas menjadi salah satu faktor penting dalam meningkatkan kualitas sumber daya manusia.</p>
        <p>Teknologi dapat membantu sekolah menyediakan berbagai fasilitas pembelajaran yang mendukung kebutuhan peserta didik.</p>
        <p>Kolaborasi antara guru, peserta didik, sekolah, dan teknologi dapat menciptakan lingkungan pendidikan yang lebih efektif dan inklusif.</p>
    ',
            'kategori' => 'Pendidikan, Kesehatan',
            'dilihat' => 1,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Artikel::create([
            'judul' => 'Keamanan Digital bagi Pelajar',
            'slug' => Str::slug('Keamanan Digital bagi Pelajar'),
            'thumbnail' => '1786245030.jpg',
            'konten' => '
        <p>Penggunaan teknologi dan internet harus disertai dengan pemahaman mengenai keamanan digital.</p>
        <p>Pelajar perlu menjaga informasi pribadi, menggunakan kata sandi yang kuat, dan berhati-hati ketika menerima informasi dari orang lain.</p>
        <p>Pemahaman keamanan digital dapat membantu pelajar terhindar dari berbagai risiko seperti penipuan, pencurian akun, dan penyalahgunaan data pribadi.</p>
    ',
            'kategori' => 'Pendidikan, Kesehatan',
            'dilihat' => 1,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Artikel::create([
            'judul' => 'Kecerdasan Buatan dalam Pendidikan',
            'slug' => Str::slug('Kecerdasan Buatan dalam Pendidikan'),
            'thumbnail' => '1786245030.jpg',
            'konten' => '
        <p>Kecerdasan buatan atau artificial intelligence mulai banyak digunakan dalam berbagai bidang, termasuk pendidikan.</p>
        <p>Teknologi AI dapat membantu guru dan peserta didik dalam mencari informasi, membuat materi, serta mendukung proses pembelajaran.</p>
        <p>Meskipun memberikan banyak manfaat, penggunaan AI harus dilakukan secara kritis, etis, dan bertanggung jawab agar tidak mengurangi proses belajar.</p>
    ',
            'kategori' => 'Pendidikan, Kesehatan',
            'dilihat' => 1,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Artikel::create([
            'judul' => 'Membangun Budaya Belajar yang Positif',
            'slug' => Str::slug('Membangun Budaya Belajar yang Positif'),
            'thumbnail' => '1786245030.jpg',
            'konten' => '
        <p>Budaya belajar yang positif dapat menciptakan lingkungan pendidikan yang nyaman dan mendukung perkembangan peserta didik.</p>
        <p>Guru dapat membangun budaya belajar melalui komunikasi yang baik, pemberian apresiasi, serta aktivitas pembelajaran yang melibatkan siswa.</p>
        <p>Lingkungan belajar yang positif akan membantu peserta didik menjadi lebih percaya diri, aktif, dan bertanggung jawab terhadap proses belajarnya.</p>
    ',
            'kategori' => 'Pendidikan, Kesehatan',
            'dilihat' => 1,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
