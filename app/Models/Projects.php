<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;


    protected $table = 'projeler';

    protected $fillable = [

        'ad',
        'aciklama',
        'baslangic_tarihi',
        'calisan_id',
        'bitis_tarihi'

    ];



    public function employee()
    {
        return $this->belongsTo(Employees::class, 'calisan_id'); // Projeyi çalışana bağlayan ilişki
    }


}
