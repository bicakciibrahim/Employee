<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformanceEvaluation extends Model
{
    use HasFactory;


    protected $table = 'performans_degerlendirme';


    protected $fillable = [
        'calisan_id',
        'puan',
        'yorum',
    ];


    public function employee()
    {
        return $this->belongsTo(Employees::class, 'calisanlar_id');
    }
}
