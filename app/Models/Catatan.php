<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    use HasFactory;

    protected $table = 'catatans';
    protected $fillable = [
        'user_id',
        'tanggal',
        'waktu',
        'lokasi',
        'suhu'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    
}
