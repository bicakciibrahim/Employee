<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    use HasFactory;
    protected $table = 'oneris';

    protected $fillable = [
        'isim',
        'email',
        'telefon',
        'mesaj',
    ];
}
