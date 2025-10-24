<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengaturanUmum extends Model
{
    use HasFactory;
    protected $table = "pengaturanumum";
    protected $fillable = [
        "alamat",
        "telepon",
        "email"
    ];
}
