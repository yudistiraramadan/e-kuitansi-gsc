<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuitansi extends Model
{
    use HasFactory;
    protected $table = 'kuitansi';
    protected $fillable = [
        'pengaju', 'nominal', 'terbilang', 'keperluan', 'jenis_kuitansi', 'pembayaran'
    ];
}
