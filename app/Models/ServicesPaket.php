<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesPaket extends Model
{
    use HasFactory;
    protected $fillable = [
        'paket_gambar', 'judulkartu', 'harga', 'tempat'
    ];
}
