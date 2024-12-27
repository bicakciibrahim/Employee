<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissonType extends Model
{
    use HasFactory;


    protected $table = 'izin_turleri';


    protected $fillable = [
        'izin_turu_adi',
        'aciklama',
    ];


    public function permissions()
    {
        return $this->hasMany(Permissions::class, 'izin_turu_id');
    }
}
