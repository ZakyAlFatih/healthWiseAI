<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'user';

    protected $primaryKey = 'userID';
    public $incrementing = false;

    protected $fillable = [
        'username',
        'password',
        'name',
        'email',
        'tanggalLahir',
    ];

    public function auditlogs()
    {
        return $this->hasMany(AuditLog::class, 'userID', 'userID');
    }

    public function konsultasis()
    {
        return $this->hasMany(Konsultasi::class, 'userID', 'userID');
    }

    // Add other relationships for `laporankesehatan`, `rekomendasimakanan`, etc.
}
