<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProjectsSeeder extends Seeder
{
    public function run()
    {
        $projeler = [
            [
                'ad' => 'Yeni Web Sitesi',
                'aciklama' => 'Kurumsal web sitesi tasarım ve geliştirme projesi.',
                'baslangic_tarihi' => Carbon::parse('2024-01-01'),
                'bitis_tarihi' => Carbon::parse('2024-06-30'),
                'calisan_id' => 1, // Çalışan ID
            ],
            [
                'ad' => 'Mobil Uygulama',
                'aciklama' => 'Firma için mobil uygulama geliştirme projesi.',
                'baslangic_tarihi' => Carbon::parse('2024-03-01'),
                'bitis_tarihi' => Carbon::parse('2024-09-30'),
                'calisan_id' => 2,
            ],
            [
                'ad' => 'E-Ticaret Sistemi',
                'aciklama' => 'Yeni e-ticaret platformunun geliştirilmesi.',
                'baslangic_tarihi' => Carbon::parse('2024-02-15'),
                'bitis_tarihi' => Carbon::parse('2024-07-15'),
                'calisan_id' => 3,
            ],
            [
                'ad' => 'Müşteri İlişkileri Yönetim Sistemi',
                'aciklama' => 'CRM yazılımının entegrasyonu ve geliştirilmesi.',
                'baslangic_tarihi' => Carbon::parse('2024-01-10'),
                'bitis_tarihi' => Carbon::parse('2024-05-10'),
                'calisan_id' => 4,
            ],
            [
                'ad' => 'Eğitim Portalı',
                'aciklama' => 'Çalışanlar için online eğitim platformunun kurulması.',
                'baslangic_tarihi' => Carbon::parse('2024-02-01'),
                'bitis_tarihi' => Carbon::parse('2024-08-01'),
                'calisan_id' => 5,
            ],
            [
                'ad' => 'İnsan Kaynakları Yazılımı',
                'aciklama' => 'Yeni insan kaynakları yönetim yazılımı geliştirme projesi.',
                'baslangic_tarihi' => Carbon::parse('2024-04-01'),
                'bitis_tarihi' => Carbon::parse('2024-10-01'),
                'calisan_id' => 1,
            ],
            [
                'ad' => 'İç İletişim Uygulaması',
                'aciklama' => 'Çalışanlar için iç iletişimi sağlayan uygulama geliştirme.',
                'baslangic_tarihi' => Carbon::parse('2024-05-15'),
                'bitis_tarihi' => Carbon::parse('2024-11-15'),
                'calisan_id' => 2,
            ],
            [
                'ad' => 'Veri Analitiği Projesi',
                'aciklama' => 'Veri analizi ve raporlama sistemi geliştirilmesi.',
                'baslangic_tarihi' => Carbon::parse('2024-01-20'),
                'bitis_tarihi' => Carbon::parse('2024-06-20'),
                'calisan_id' => 3,
            ],
            [
                'ad' => 'Sosyal Medya Kampanyası',
                'aciklama' => 'Yeni sosyal medya kampanyası için strateji geliştirilmesi.',
                'baslangic_tarihi' => Carbon::parse('2024-03-10'),
                'bitis_tarihi' => Carbon::parse('2024-05-20'),
                'calisan_id' => 4,
            ],
            [
                'ad' => 'Yazılım Güvenlik Güncellemesi',
                'aciklama' => 'Yazılımın güvenlik açıklarını kapatmak için yapılan güncellemeler.',
                'baslangic_tarihi' => Carbon::parse('2024-06-01'),
                'bitis_tarihi' => Carbon::parse('2024-06-30'),
                'calisan_id' => 5,
            ],
        ];

        DB::table('projeler')->insert($projeler);
    }
}
