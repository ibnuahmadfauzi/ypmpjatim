<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    use HasFactory;
    protected $table = 'pengaturan';
    protected $fillable = [
        'judul',
        'deskripsi',
        'tentang_perusahaan',
        'logo_navbar',
        'logo_perusahaan',
        'banner',
        'alamat',
        'notelp',
        'email',
        'hero',
    ];
}
