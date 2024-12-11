<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKesehatan extends Model
{
    use HasFactory;

    protected $table = 'riwayatkesehatan';

    // Menambahkan field yang bisa diisi
    protected $fillable = [
        'userID',
        'weight',
        'height',
        'gender',
        'health_history',
        'symptoms',
        'activity_level',
        'step_count',
        'sleep_duration',
        'physical_activity',
        'calories_burned',
        'sedentary_time',
        'water_intake',
        'meal_log',
        'mood_level'
    ];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'userID');
    }

    // Relasi dengan ActivityLevel jika diperlukan
    public function activityLevel()
    {
        return $this->belongsTo(ActivityLevel::class, 'activity_level', 'activityLevelID');
    }
}
