<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'calisanlar';

    protected $fillable = [
        'ad',
        'soyad',
        'email',
        'telefon',
        'calisan_turu_id',
        'birim_id',
        'gorev_id',
        'ise_baslangic_tarihi',
        'son_calisma_tarihi',
        'maas',
    ];


    public function employeeType()
    {
        return $this->belongsTo(EmployeeType::class, 'calisan_turu_id');
    }


    public function department()
    {
        return $this->belongsTo(Department::class, 'birim_id');
    }


    public function task()
    {
        return $this->belongsTo(Tasks::class, 'gorev_id');
    }


    public function salaries()
    {
        return $this->hasMany(Salaries::class, 'calisan_id');
    }


    public function projects()
    {
        return $this->hasMany(Projects::class, 'calisan_id');
    }


    public function trainings()
    {
        return $this->hasMany(EmployeeTraiining::class, 'calisan_id');
    }


    public function evaluations()
    {
        return $this->hasMany(PerformanceEvaluation::class, 'calisan_id');
    }


    public function permissions()
    {
        return $this->hasMany(Permissions::class, 'calisan_id');
    }
}
