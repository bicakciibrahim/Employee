<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    public function run()
    {
        // Rastgele 10 çalışan ekle
        $calisanlar = [
            [
                'ad' => 'Ahmet',
                'soyad' => 'Yılmaz',
                'email' => 'ahmet.yilmaz@example.com',
                'telefon' => '5551234567',
                'calisan_turu_id' => 1,
                'birim_id' => 1,
                'gorev_id' => 1,
                'ise_baslangic_tarihi' => '2022-01-01',
                'son_calisma_tarihi' => null,
                'maas' => 8500.50,
            ],
            [
                'ad' => 'Mehmet',
                'soyad' => 'Kaya',
                'email' => 'mehmet.kaya@example.com',
                'telefon' => '5559876543',
                'calisan_turu_id' => 2,
                'birim_id' => 2,
                'gorev_id' => 2,
                'ise_baslangic_tarihi' => '2021-05-15',
                'son_calisma_tarihi' => null,
                'maas' => 9200.75,
            ],
            [
                'ad' => 'Ayşe',
                'soyad' => 'Demir',
                'email' => 'ayse.demir@example.com',
                'telefon' => '5554567890',
                'calisan_turu_id' => 1,
                'birim_id' => 1,
                'gorev_id' => 3,
                'ise_baslangic_tarihi' => '2023-02-10',
                'son_calisma_tarihi' => null,
                'maas' => 7800.00,
            ],
            [
                'ad' => 'Fatma',
                'soyad' => 'Çelik',
                'email' => 'fatma.celik@example.com',
                'telefon' => '5551239876',
                'calisan_turu_id' => 2,
                'birim_id' => 3,
                'gorev_id' => 4,
                'ise_baslangic_tarihi' => '2020-10-20',
                'son_calisma_tarihi' => null,
                'maas' => 8900.25,
            ],
            [
                'ad' => 'Ali',
                'soyad' => 'Şahin',
                'email' => 'ali.sahin@example.com',
                'telefon' => '5555671234',
                'calisan_turu_id' => 3,
                'birim_id' => 2,
                'gorev_id' => 2,
                'ise_baslangic_tarihi' => '2021-11-30',
                'son_calisma_tarihi' => null,
                'maas' => 9500.00,
            ],
            [
                'ad' => 'Zeynep',
                'soyad' => 'Karaca',
                'email' => 'zeynep.karaca@example.com',
                'telefon' => '5554321098',
                'calisan_turu_id' => 1,
                'birim_id' => 3,
                'gorev_id' => 5,
                'ise_baslangic_tarihi' => '2023-03-01',
                'son_calisma_tarihi' => null,
                'maas' => 8200.75,
            ],
            [
                'ad' => 'Emre',
                'soyad' => 'Yıldız',
                'email' => 'emre.yildiz@example.com',
                'telefon' => '5557896543',
                'calisan_turu_id' => 2,
                'birim_id' => 4,
                'gorev_id' => 6,
                'ise_baslangic_tarihi' => '2019-07-15',
                'son_calisma_tarihi' => null,
                'maas' => 9800.50,
            ],
            [
                'ad' => 'Hüseyin',
                'soyad' => 'Aydın',
                'email' => 'huseyin.aydin@example.com',
                'telefon' => '5558765432',
                'calisan_turu_id' => 3,
                'birim_id' => 2,
                'gorev_id' => 3,
                'ise_baslangic_tarihi' => '2022-08-01',
                'son_calisma_tarihi' => null,
                'maas' => 9100.00,
            ],
            [
                'ad' => 'Selin',
                'soyad' => 'Özkan',
                'email' => 'selin.ozkan@example.com',
                'telefon' => '5553456789',
                'calisan_turu_id' => 1,
                'birim_id' => 1,
                'gorev_id' => 4,
                'ise_baslangic_tarihi' => '2020-12-12',
                'son_calisma_tarihi' => null,
                'maas' => 8700.25,
            ],
            [
                'ad' => 'Burak',
                'soyad' => 'Kılıç',
                'email' => 'burak.kilic@example.com',
                'telefon' => '5556543210',
                'calisan_turu_id' => 2,
                'birim_id' => 5,
                'gorev_id' => 5,
                'ise_baslangic_tarihi' => '2018-06-20',
                'son_calisma_tarihi' => null,
                'maas' => 9600.75,
            ],
        ];

        DB::table('calisanlar')->insert($calisanlar);
    }
}
