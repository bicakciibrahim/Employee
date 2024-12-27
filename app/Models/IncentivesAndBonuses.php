<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncentivesAndBonuses extends Model
{
    use HasFactory;

    protected $table = 'tesvik_primler';


    protected $fillable = [
        'calisan_id',
        'tutar',  // Prim tutarı
        'odeme_tarihi',  // Ödeme tarihi
        'aciklama',  // Primle ilgili açıklama (isteğe bağlı)
    ];


    public function employee()
    {
        return $this->belongsTo(Employee::class, 'calisan_id');
    }
}
