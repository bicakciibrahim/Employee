<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncentivesAndBonusesSeeder extends Seeder
{
    public function run()
    {
        $tesvikPrimler = [
            ['calisan_id' => 1, 'tutar' => 1500.50, 'odeme_tarihi' => '2023-01-15', 'aciklama' => 'Proje başarı primi'],
            ['calisan_id' => 2, 'tutar' => 2000.00, 'odeme_tarihi' => '2023-02-10', 'aciklama' => 'Satış hedefi ödülü'],
            ['calisan_id' => 3, 'tutar' => 1750.75, 'odeme_tarihi' => '2023-03-05', 'aciklama' => 'Performans primi'],
            ['calisan_id' => 4, 'tutar' => 2200.25, 'odeme_tarihi' => '2023-04-20', 'aciklama' => 'Yıllık hedef primi'],
            ['calisan_id' => 5, 'tutar' => 1800.00, 'odeme_tarihi' => '2023-05-15', 'aciklama' => 'Müşteri memnuniyeti ödülü'],
            ['calisan_id' => 6, 'tutar' => 2500.00, 'odeme_tarihi' => '2023-06-30', 'aciklama' => 'Takım liderliği ödülü'],
            ['calisan_id' => 7, 'tutar' => 1300.00, 'odeme_tarihi' => '2023-07-25', 'aciklama' => 'Yenilikçi fikir teşviği'],
            ['calisan_id' => 8, 'tutar' => 1950.50, 'odeme_tarihi' => '2023-08-10', 'aciklama' => 'Ekip başarısı primi'],
            ['calisan_id' => 9, 'tutar' => 1600.75, 'odeme_tarihi' => '2023-09-15', 'aciklama' => 'Zamanında teslim ödülü'],
            ['calisan_id' => 10, 'tutar' => 2100.00, 'odeme_tarihi' => '2023-10-05', 'aciklama' => 'Maliyet azaltma teşviği'],
        ];

        DB::table('tesvik_primler')->insert($tesvikPrimler);
    }
}
