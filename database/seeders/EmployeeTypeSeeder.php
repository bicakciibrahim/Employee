<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTypeSeeder extends Seeder
{
    public function run()
    {
        $calisanTurleri = [
            ['tur_adi' => 'Tam Zamanlı', 'aciklama' => 'Haftada 40 saat çalışan tam zamanlı personel.'],
            ['tur_adi' => 'Yarı Zamanlı', 'aciklama' => 'Belirli saatlerde çalışan yarı zamanlı personel.'],
            ['tur_adi' => 'Stajyer', 'aciklama' => 'Kısa süreli iş deneyimi kazanan stajyerler.'],
            ['tur_adi' => 'Geçici Çalışan', 'aciklama' => 'Geçici projelerde çalışan personel.'],
            ['tur_adi' => 'Uzaktan Çalışan', 'aciklama' => 'Ofis dışında çalışan uzaktan personel.'],
            ['tur_adi' => 'Kıdemli Çalışan', 'aciklama' => 'Uzun yıllar deneyimi olan personel.'],
            ['tur_adi' => 'Sözleşmeli Çalışan', 'aciklama' => 'Belirli süreli sözleşmeyle çalışan personel.'],
            ['tur_adi' => 'Danışman', 'aciklama' => 'Belirli konularda danışmanlık yapan personel.'],
            ['tur_adi' => 'Freelancer', 'aciklama' => 'Proje bazlı çalışan bağımsız profesyonel.'],
            ['tur_adi' => 'Yönetici', 'aciklama' => 'Ekip veya şirket yöneten personel.'],
        ];

        DB::table('calisan_turleri')->insert($calisanTurleri);
    }
}
