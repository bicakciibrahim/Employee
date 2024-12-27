<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerformanceEvaluationSeeder extends Seeder
{
    public function run()
    {
        $performansDegerlendirme = [
            ['calisan_id' => 1, 'puan' => 85, 'yorum' => 'Başarılı ve özverili çalışma.'],
            ['calisan_id' => 2, 'puan' => 90, 'yorum' => 'Satış hedeflerini başarıyla gerçekleştirdi.'],
            ['calisan_id' => 3, 'puan' => 75, 'yorum' => 'Performansında artış bekleniyor.'],
            ['calisan_id' => 4, 'puan' => 80, 'yorum' => 'Genel olarak iyi, ancak bazı projelerde zorluklar yaşandı.'],
            ['calisan_id' => 5, 'puan' => 92, 'yorum' => 'Ekip içi işbirliği mükemmel.'],
            ['calisan_id' => 6, 'puan' => 88, 'yorum' => 'Yeni görevlerde hızlı uyum sağladı.'],
            ['calisan_id' => 7, 'puan' => 78, 'yorum' => 'Bazen projelere geç başlamaktadır.'],
            ['calisan_id' => 8, 'puan' => 95, 'yorum' => 'Çok iyi bir performans, yüksek motivasyon.'],
            ['calisan_id' => 9, 'puan' => 80, 'yorum' => 'Projelerde iyi bir iş çıkarıyor ancak iletişimde eksiklikler var.'],
            ['calisan_id' => 10, 'puan' => 85, 'yorum' => 'İyi sonuçlar elde etti ancak zaman yönetimi konusunda gelişim sağlanabilir.'],
        ];

        DB::table('performans_degerlendirme')->insert($performansDegerlendirme);
    }
}
