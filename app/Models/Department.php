<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    // Tablonun adı
    protected $table = 'birimler';

    // Toplu atamaya (mass assignment) izin verilen alanlar
    protected $fillable = [
        'birim_adi',
        'aciklama',
    ];
}
