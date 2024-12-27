<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = 'basvurular';
    protected $fillable = ['isim', 'email', 'telefon', 'birim_id', 'mesaj'];

    public function department()
    {
        return $this->belongsTo(Department::class, 'birim_id');  // 'birim_id' ile 'Department' ilişkisini kuruyoruz
    }
}
