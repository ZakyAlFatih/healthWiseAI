<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekomendasiAktivitasFisik extends Model
{
    use HasFactory;

    protected $table = 'rekomendasiaktivitasfisik';
    protected $fillable = ['userID', 'tipeLatihan', 'durasi', 'tanggal'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'userID');
    }
}
