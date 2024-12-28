<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeTraiining extends Model
{
    use HasFactory;

    protected $table = 'calisan_egitimleri';


    protected $fillable = [
        'calisan_id',
        'egitim_turu_id',
        'egitim_tarihi',
        'egitim_durumu',
    ];

    public function calisan()
    {
        return $this->belongsTo(Employees::class, 'calisan_id');
    }

    public function egitimTuru()
    {
        return $this->belongsTo(TypeOfEducation::class, 'egitim_turu_id');
    }



}
