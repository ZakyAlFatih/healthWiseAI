<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Extend Laravel's built-in User model
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory;

    // Specify the database table name
    protected $table = 'user';

    // Specify the primary key and set incrementing to false
    protected $primaryKey = 'userID';
    public $incrementing = false;

    // Specify the attributes that can be mass assigned
    protected $fillable = [
        'userID',
        'password',
        'firstname',
        'lastname',
        'phone',
        'email',
        'tanggalLahir',
    ];

    // Hidden attributes for arrays
    protected $hidden = [
        'password', // Ensure password is hidden in responses
        'remember_token',
    ];

    // Define relationships
    public function auditLogs()
    {
        return $this->hasMany(AuditLog::class, 'userID', 'userID');
    }

    public function konsultasis()
    {
        return $this->hasMany(Konsultasi::class, 'userID', 'userID');
    }
}
