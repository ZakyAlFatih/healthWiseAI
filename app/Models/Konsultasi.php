<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    protected $table = 'konsultasi';
    protected $fillable = ['userID', 'riwayatKonsultasi', 'hasilKonsultasi', 'gejala', 'tanggal'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'userID');
    }
}
