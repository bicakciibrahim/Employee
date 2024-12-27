<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    use HasFactory;


    protected $table = 'izinler';


    protected $fillable = [
        'calisan_id',  // Çalışan ID
        'izin_turu_id',  // İzin türü ID
        'baslangic_tarihi',  // Başlangıç tarihi
        'bitis_tarihi',  // Bitiş tarihi
        'aciklama',  // İzin açıklaması (isteğe bağlı)
    ];


    public function employee()
    {
        return $this->belongsTo(Employees::class, 'calisan_id');
    }


    public function permissionType()
    {
        return $this->belongsTo(PermissonType::class, 'izin_turu_id');
    }
}
