<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        $birimler = [
            ['birim_adi' => 'İnsan Kaynakları', 'aciklama' => 'Personel işe alımı ve yönetimi.'],
            ['birim_adi' => 'Muhasebe', 'aciklama' => 'Finansal işlemler ve raporlama.'],
            ['birim_adi' => 'Bilgi İşlem', 'aciklama' => 'BT altyapısı ve yazılım geliştirme.'],
            ['birim_adi' => 'Satış', 'aciklama' => 'Satış stratejilerinin geliştirilmesi ve müşteri yönetimi.'],
            ['birim_adi' => 'Lojistik', 'aciklama' => 'Tedarik zinciri ve nakliye yönetimi.'],
            ['birim_adi' => 'Pazarlama', 'aciklama' => 'Reklam ve marka yönetimi.'],
            ['birim_adi' => 'Ar-Ge', 'aciklama' => 'Yeni ürün geliştirme ve inovasyon.'],
            ['birim_adi' => 'Hukuk', 'aciklama' => 'Şirketin yasal işlemleri ve sözleşmeler.'],
            ['birim_adi' => 'Operasyon', 'aciklama' => 'Günlük iş süreçlerinin yürütülmesi.'],
            ['birim_adi' => 'Müşteri Hizmetleri', 'aciklama' => 'Müşteri sorunlarının çözümü ve destek.'],
        ];

        DB::table('birimler')->insert($birimler);
    }
}
