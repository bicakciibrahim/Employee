<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RollCall extends Model
{
    use HasFactory;


    protected $table = 'yoklama';

    protected $fillable = [
        'calisan_id',    // Çalışan ID'si
        'tarih',         // Yoklama tarihi
        'durum',         // Yoklama durumu (Gelmedi, Geldi, İzinli, Raporlu)
    ];


    public function employee()
    {
        return $this->belongsTo(Employees::class, 'calisan_id', 'id');
    }
}
