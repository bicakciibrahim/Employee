<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        $izinler = [
            ['calisan_id' => 1, 'izin_turu_id' => 1, 'baslangic_tarihi' => '2023-01-10', 'bitis_tarihi' => '2023-01-12', 'aciklama' => 'Yıllık izin'],
            ['calisan_id' => 2, 'izin_turu_id' => 2, 'baslangic_tarihi' => '2023-02-15', 'bitis_tarihi' => '2023-02-16', 'aciklama' => 'Hastalık izni'],
            ['calisan_id' => 3, 'izin_turu_id' => 3, 'baslangic_tarihi' => '2023-03-20', 'bitis_tarihi' => '2023-03-22', 'aciklama' => 'Mazeret izni'],
            ['calisan_id' => 4, 'izin_turu_id' => 1, 'baslangic_tarihi' => '2023-04-05', 'bitis_tarihi' => '2023-04-07', 'aciklama' => 'Yıllık izin'],
            ['calisan_id' => 5, 'izin_turu_id' => 2, 'baslangic_tarihi' => '2023-05-10', 'bitis_tarihi' => '2023-05-12', 'aciklama' => 'Hastalık izni'],
            ['calisan_id' => 6, 'izin_turu_id' => 3, 'baslangic_tarihi' => '2023-06-01', 'bitis_tarihi' => '2023-06-02', 'aciklama' => 'Mazeret izni'],
            ['calisan_id' => 7, 'izin_turu_id' => 1, 'baslangic_tarihi' => '2023-07-15', 'bitis_tarihi' => '2023-07-17', 'aciklama' => 'Yıllık izin'],
            ['calisan_id' => 8, 'izin_turu_id' => 2, 'baslangic_tarihi' => '2023-08-10', 'bitis_tarihi' => '2023-08-12', 'aciklama' => 'Hastalık izni'],
            ['calisan_id' => 9, 'izin_turu_id' => 3, 'baslangic_tarihi' => '2023-09-05', 'bitis_tarihi' => '2023-09-06', 'aciklama' => 'Mazeret izni'],
            ['calisan_id' => 10, 'izin_turu_id' => 1, 'baslangic_tarihi' => '2023-10-10', 'bitis_tarihi' => '2023-10-12', 'aciklama' => 'Yıllık izin'],
        ];

        DB::table('izinler')->insert($izinler);
    }
}
