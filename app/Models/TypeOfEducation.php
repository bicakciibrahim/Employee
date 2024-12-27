<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfEducation extends Model
{
    use HasFactory;


    protected $table = 'egitim_turu';


    protected $fillable = [
        'ad',
        'aciklama',
    ];


    public function typeEducation()
    {
        return $this->hasMany(EmployeeTraiining::class, 'egitim_turu_id');
    }
}
