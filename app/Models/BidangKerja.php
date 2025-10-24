<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangKerja extends Model
{
    use HasFactory;
    protected $table = 'bidangkerja';
    protected $fillable = [
        'nama_bidang',
        'deskripsi',
        'tautan',
        'gambar'
    ];
}
