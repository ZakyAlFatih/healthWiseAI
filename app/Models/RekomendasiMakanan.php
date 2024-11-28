<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekomendasiMakanan extends Model
{
    use HasFactory;

    protected $table = 'rekomendasimakanan';
    protected $fillable = ['userID', 'namaMakanan', 'jumlahKalori', 'nutritionPlanID', 'tanggal'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'userID');
    }

    public function nutritionPlan()
    {
        return $this->belongsTo(NutritionPlan::class, 'nutritionPlanID', 'nutritionPlanID');
    }
}
