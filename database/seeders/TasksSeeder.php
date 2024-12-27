<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TasksSeeder extends Seeder
{
    public function run()
    {
        $gorevler = [
            [
                'gorev_adi' => 'Proje Planlama',
                'baslangic_tarihi' => Carbon::parse('2024-01-01'),
                'bitis_tarihi' => Carbon::parse('2024-01-10'),
                'durum' => 'Tamamlandı',
            ],
            [
                'gorev_adi' => 'Sunum Hazırlığı',
                'baslangic_tarihi' => Carbon::parse('2024-01-15'),
                'bitis_tarihi' => Carbon::parse('2024-01-25'),
                'durum' => 'Devam Ediyor',
            ],
            [
                'gorev_adi' => 'Rapor Yazma',
                'baslangic_tarihi' => Carbon::parse('2024-01-05'),
                'bitis_tarihi' => Carbon::parse('2024-01-12'),
                'durum' => 'Tamamlandı',
            ],
            [
                'gorev_adi' => 'Veri Analizi',
                'baslangic_tarihi' => Carbon::parse('2024-01-15'),
                'bitis_tarihi' => Carbon::parse('2024-01-22'),
                'durum' => 'Devam Ediyor',
            ],
            [
                'gorev_adi' => 'Müşteri Görüşmesi',
                'baslangic_tarihi' => Carbon::parse('2024-01-10'),
                'bitis_tarihi' => Carbon::parse('2024-01-12'),
                'durum' => 'Tamamlandı',
            ],
            [
                'gorev_adi' => 'Ekip Toplantısı',
                'baslangic_tarihi' => Carbon::parse('2024-01-20'),
                'bitis_tarihi' => Carbon::parse('2024-01-22'),
                'durum' => 'Devam Ediyor',
            ],
            [
                'gorev_adi' => 'Pazar Araştırması',
                'baslangic_tarihi' => Carbon::parse('2024-01-05'),
                'bitis_tarihi' => Carbon::parse('2024-01-10'),
                'durum' => 'Tamamlandı',
            ],
            [
                'gorev_adi' => 'Bütçe Hazırlığı',
                'baslangic_tarihi' => Carbon::parse('2024-01-15'),
                'bitis_tarihi' => Carbon::parse('2024-01-18'),
                'durum' => 'Devam Ediyor',
            ],
            [
                'gorev_adi' => 'İç Denetim',
                'baslangic_tarihi' => Carbon::parse('2024-01-07'),
                'bitis_tarihi' => Carbon::parse('2024-01-14'),
                'durum' => 'Beklemede',
            ],
            [
                'gorev_adi' => 'Finansal Raporlama',
                'baslangic_tarihi' => Carbon::parse('2024-01-16'),
                'bitis_tarihi' => Carbon::parse('2024-01-22'),
                'durum' => 'Beklemede',
            ],
            [
                'gorev_adi' => 'Ekip Yönetimi',
                'baslangic_tarihi' => Carbon::parse('2024-01-01'),
                'bitis_tarihi' => Carbon::parse('2024-01-07'),
                'durum' => 'Tamamlandı',
            ],
            [
                'gorev_adi' => 'Proje İzleme',
                'baslangic_tarihi' => Carbon::parse('2024-01-10'),
                'bitis_tarihi' => Carbon::parse('2024-01-20'),
                'durum' => 'Devam Ediyor',
            ],
            [
                'gorev_adi' => 'Kampanya Planlama',
                'baslangic_tarihi' => Carbon::parse('2024-01-10'),
                'bitis_tarihi' => Carbon::parse('2024-01-20'),
                'durum' => 'Beklemede',
            ],
            [
                'gorev_adi' => 'Pazar Analizi',
                'baslangic_tarihi' => Carbon::parse('2024-01-22'),
                'bitis_tarihi' => Carbon::parse('2024-01-28'),
                'durum' => 'Devam Ediyor',
            ],
            [
                'gorev_adi' => 'Sosyal Medya Yönetimi',
                'baslangic_tarihi' => Carbon::parse('2024-01-05'),
                'bitis_tarihi' => Carbon::parse('2024-01-10'),
                'durum' => 'Tamamlandı',
            ],
            [
                'gorev_adi' => 'Web Tasarımı',
                'baslangic_tarihi' => Carbon::parse('2024-01-15'),
                'bitis_tarihi' => Carbon::parse('2024-01-22'),
                'durum' => 'Devam Ediyor',
            ],
            [
                'gorev_adi' => 'Yazılım Geliştirme',
                'baslangic_tarihi' => Carbon::parse('2024-01-05'),
                'bitis_tarihi' => Carbon::parse('2024-01-12'),
                'durum' => 'Tamamlandı',
            ],
            [
                'gorev_adi' => 'Veritabanı Yönetimi',
                'baslangic_tarihi' => Carbon::parse('2024-01-15'),
                'bitis_tarihi' => Carbon::parse('2024-01-20'),
                'durum' => 'Devam Ediyor',
            ],
            [
                'gorev_adi' => 'Yönetim Toplantısı',
                'baslangic_tarihi' => Carbon::parse('2024-01-01'),
                'bitis_tarihi' => Carbon::parse('2024-01-05'),
                'durum' => 'Tamamlandı',
            ],
            [
                'gorev_adi' => 'Müşteri Desteği',
                'baslangic_tarihi' => Carbon::parse('2024-01-10'),
                'bitis_tarihi' => Carbon::parse('2024-01-15'),
                'durum' => 'Devam Ediyor',
            ],
            [
                'gorev_adi' => 'İç İletişim Yönetimi',
                'baslangic_tarihi' => Carbon::parse('2024-01-20'),
                'bitis_tarihi' => Carbon::parse('2024-01-30'),
                'durum' => 'Beklemede',
            ],
            [
                'gorev_adi' => 'Veri Toplama',
                'baslangic_tarihi' => Carbon::parse('2024-01-23'),
                'bitis_tarihi' => Carbon::parse('2024-01-29'),
                'durum' => 'Devam Ediyor',
            ],
        ];

        DB::table('gorevler')->insert($gorevler);
    }
}
