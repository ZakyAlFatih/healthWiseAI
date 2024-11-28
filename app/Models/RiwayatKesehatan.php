<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKesehatan extends Model
{
    use HasFactory;

    protected $table = 'riwayatkesehatan';
    protected $fillable = ['userID', 'beratBadan', 'tinggiBadan', 'gender', 'activityLevelID'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'userID');
    }

    public function activityLevel()
    {
        return $this->belongsTo(ActivityLevel::class, 'activityLevelID', 'activityLevelID');
    }
}
