<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SalariesSeeder extends Seeder
{
    public function run()
    {
        $maaslar = [
            // Çalışan 1
            [
                'calisan_id' => 1,
                'tutar' => 8500.50,
                'odeme_tarihi' => Carbon::parse('2024-01-01'),
            ],
            [
                'calisan_id' => 1,
                'tutar' => 8600.75,
                'odeme_tarihi' => Carbon::parse('2024-02-01'),
            ],
            // Çalışan 2
            [
                'calisan_id' => 2,
                'tutar' => 9200.75,
                'odeme_tarihi' => Carbon::parse('2024-01-01'),
            ],
            [
                'calisan_id' => 2,
                'tutar' => 9300.00,
                'odeme_tarihi' => Carbon::parse('2024-02-01'),
            ],
            // Çalışan 3
            [
                'calisan_id' => 3,
                'tutar' => 7800.00,
                'odeme_tarihi' => Carbon::parse('2024-01-01'),
            ],
            [
                'calisan_id' => 3,
                'tutar' => 7900.50,
                'odeme_tarihi' => Carbon::parse('2024-02-01'),
            ],
            // Çalışan 4
            [
                'calisan_id' => 4,
                'tutar' => 8900.25,
                'odeme_tarihi' => Carbon::parse('2024-01-01'),
            ],
            [
                'calisan_id' => 4,
                'tutar' => 9000.75,
                'odeme_tarihi' => Carbon::parse('2024-02-01'),
            ],
            // Çalışan 5
            [
                'calisan_id' => 5,
                'tutar' => 9500.00,
                'odeme_tarihi' => Carbon::parse('2024-01-01'),
            ],
            [
                'calisan_id' => 5,
                'tutar' => 9600.00,
                'odeme_tarihi' => Carbon::parse('2024-02-01'),
            ],
            // Çalışan 6
            [
                'calisan_id' => 6,
                'tutar' => 8200.75,
                'odeme_tarihi' => Carbon::parse('2024-01-01'),
            ],
            [
                'calisan_id' => 6,
                'tutar' => 8300.00,
                'odeme_tarihi' => Carbon::parse('2024-02-01'),
            ],
            // Çalışan 7
            [
                'calisan_id' => 7,
                'tutar' => 9800.50,
                'odeme_tarihi' => Carbon::parse('2024-01-01'),
            ],
            [
                'calisan_id' => 7,
                'tutar' => 9900.00,
                'odeme_tarihi' => Carbon::parse('2024-02-01'),
            ],
            // Çalışan 8
            [
                'calisan_id' => 8,
                'tutar' => 9100.00,
                'odeme_tarihi' => Carbon::parse('2024-01-01'),
            ],
            [
                'calisan_id' => 8,
                'tutar' => 9200.50,
                'odeme_tarihi' => Carbon::parse('2024-02-01'),
            ],
            // Çalışan 9
            [
                'calisan_id' => 9,
                'tutar' => 8700.25,
                'odeme_tarihi' => Carbon::parse('2024-01-01'),
            ],
            [
                'calisan_id' => 9,
                'tutar' => 8800.75,
                'odeme_tarihi' => Carbon::parse('2024-02-01'),
            ],
            // Çalışan 10
            [
                'calisan_id' => 10,
                'tutar' => 9600.75,
                'odeme_tarihi' => Carbon::parse('2024-01-01'),
            ],
            [
                'calisan_id' => 10,
                'tutar' => 9700.50,
                'odeme_tarihi' => Carbon::parse('2024-02-01'),
            ],
        ];

        DB::table('maaslar')->insert($maaslar);
    }
}
