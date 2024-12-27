<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeType extends Model
{
    use HasFactory;

    protected $table = 'calisan_turleri';

    protected $fillable = [
        'id',
        'tur_adi',
        'aciklama',
    ];

    public function employees()
    {
        return $this->hasMany(Employees::class, 'calisan_turu_id');
    }

}
