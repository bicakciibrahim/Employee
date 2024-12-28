<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        $izinler = [
            ['calisan_id' => 1, 'izin_turu_id' => 1, 'baslangic_tarihi' => '2024-12-01', 'bitis_tarihi' => '2024-12-10', 'aciklama' => 'Yıllık tatil için alınan izin'],
            ['calisan_id' => 2, 'izin_turu_id' => 2, 'baslangic_tarihi' => '2024-12-05', 'bitis_tarihi' => '2024-12-07', 'aciklama' => 'Grip nedeniyle alınan hastalık izni'],
            ['calisan_id' => 3, 'izin_turu_id' => 3, 'baslangic_tarihi' => '2024-12-08', 'bitis_tarihi' => '2024-12-10', 'aciklama' => 'Kişisel bir mazeret nedeniyle alınan izin'],
            ['calisan_id' => 4, 'izin_turu_id' => 4, 'baslangic_tarihi' => '2024-12-15', 'bitis_tarihi' => '2025-01-15', 'aciklama' => 'Doğum sonrası dinlenme için alınan izin'],
            ['calisan_id' => 5, 'izin_turu_id' => 5, 'baslangic_tarihi' => '2024-11-20', 'bitis_tarihi' => '2024-11-22', 'aciklama' => 'Evlilik hazırlıkları için alınan izin'],
            ['calisan_id' => 6, 'izin_turu_id' => 8, 'baslangic_tarihi' => '2024-12-18', 'bitis_tarihi' => '2024-12-20', 'aciklama' => 'Aylık düzenli dinlenme izni'],
            ['calisan_id' => 7, 'izin_turu_id' => 7, 'baslangic_tarihi' => '2024-12-25', 'bitis_tarihi' => '2024-12-31', 'aciklama' => 'Hastanede refakatçi olarak bulunmak için alınan izin'],
            ['calisan_id' => 8, 'izin_turu_id' => 8, 'baslangic_tarihi' => '2024-12-10', 'bitis_tarihi' => '2024-12-12', 'aciklama' => 'Aylık düzenli dinlenme izni'],
            ['calisan_id' => 9, 'izin_turu_id' => 9, 'baslangic_tarihi' => '2024-12-01', 'bitis_tarihi' => '2024-12-31', 'aciklama' => 'Ücretsiz bir şekilde uzun süreli alınan izin'],
            ['calisan_id' => 10, 'izin_turu_id' => 10, 'baslangic_tarihi' => '2024-12-03', 'bitis_tarihi' => '2024-12-05', 'aciklama' => 'İş seyahati için verilen yol izni'],
        ];

        DB::table('izinler')->insert($izinler);
    }
}
