<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    protected $table = 'alumni';
    protected $fillable = [
        'nisn',
        'nama',
        'jenis_kelamin',
        'tahun_masuk',
        'tahun_lulus',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'email',
        'no_telp',
        'foto'
    ];
}
