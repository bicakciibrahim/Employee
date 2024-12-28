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
        'giris_saati',   // Giris saati
        'cikis_saati',   // Cikis saati
        'durum',         // Yoklama durumu (Gelmedi, Geldi, Geç Geldi, İzinli)
    ];

    // Çalışan ile ilişki
    public function employee()
    {
        return $this->belongsTo(Employees::class, 'calisan_id', 'id');
    }
}
