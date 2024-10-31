<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_peminjam',
        'alamat_peminjam',
        'no_hp',
        'tgl_minjam',
        'tgl_kembali',
        'status',
    ];
}