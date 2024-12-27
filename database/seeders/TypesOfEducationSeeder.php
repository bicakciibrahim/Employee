<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesOfEducationSeeder extends Seeder
{
    public function run()
    {
        $egitimTurlari = [
            [
                'ad' => 'Yönetim Eğitimi',
                'aciklama' => 'Yöneticilik becerilerini geliştirmeye yönelik eğitim.',
            ],
            [
                'ad' => 'Teknik Eğitim',
                'aciklama' => 'Çalışanların teknik becerilerini artırmak için verilen eğitim.',
            ],
            [
                'ad' => 'Kişisel Gelişim Eğitimi',
                'aciklama' => 'Kişisel beceriler ve yetkinlikler üzerine eğitim.',
            ],
            [
                'ad' => 'İletişim Eğitimi',
                'aciklama' => 'Etkili iletişim kurma becerilerini geliştiren eğitim.',
            ],
            [
                'ad' => 'Satış Eğitimi',
                'aciklama' => 'Satış tekniklerini geliştiren eğitim programı.',
            ],
            [
                'ad' => 'Liderlik Eğitimi',
                'aciklama' => 'Liderlik becerilerini geliştirmeyi amaçlayan eğitim.',
            ],
            [
                'ad' => 'Zaman Yönetimi Eğitimi',
                'aciklama' => 'Zamanı daha verimli kullanmaya yönelik eğitim.',
            ],
            [
                'ad' => 'İnsan Kaynakları Eğitimi',
                'aciklama' => 'İK yönetimi ve süreçleri hakkında eğitim.',
            ],
            [
                'ad' => 'Problem Çözme Eğitimi',
                'aciklama' => 'Çalışanların problem çözme becerilerini geliştirmeyi amaçlayan eğitim.',
            ],
            [
                'ad' => 'Müşteri Hizmetleri Eğitimi',
                'aciklama' => 'Müşteri ilişkileri yönetimi üzerine eğitim.',
            ],
        ];

        DB::table('egitim_turu')->insert($egitimTurlari);
    }
}
