<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salaries extends Model
{
    use HasFactory;

    protected $table = 'maaslar'; // Veritabanı tablosunun adı

    protected $fillable = [
        'calisan_id',
        'tutar',
        'odeme_tarihi',
    ];

    public function calisan()
    {
        return $this->belongsTo(Employees::class, 'calisan_id');
    }
}
