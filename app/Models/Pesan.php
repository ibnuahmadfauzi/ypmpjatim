<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $table = 'pesan';
    protected $filllable = [
        'nama',
        'email',
        'subjek',
        'pesan',
        'status'
    ];
}
