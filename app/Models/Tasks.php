<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $table = 'gorevler';

    protected $fillable = [
        'id',
        'gorev_adi',
        'baslangic_tarihi',
        'bitis_tarihi',
        'durum',
    ];



    public function employee()
    {
        return $this->hasMany(Employees::class, 'gorev_id');
    }





}
