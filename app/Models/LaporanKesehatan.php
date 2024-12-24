<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanKesehatan extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'reportID'; 
    protected $table = 'laporankesehatan';
    protected $fillable = ['userID', 'jumlahLangkah', 'jumlahAirMinum', 'jumlahKalori', 'durasiTidur', 'tanggal'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'userID');
    }
}
