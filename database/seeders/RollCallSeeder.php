<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RollCallSeeder extends Seeder
{
    public function run()
    {
        $yoklama = [
            [
                'calisan_id' => 1,
                'tarih' => Carbon::parse('2024-01-01'),
                'durum' => 'Geldi',
            ],
            [
                'calisan_id' => 2,
                'tarih' => Carbon::parse('2024-01-01'),
                'durum' => 'Gelmedi',
            ],
            [
                'calisan_id' => 3,
                'tarih' => Carbon::parse('2024-01-02'),
                'durum' => 'İzinli',
            ],
            [
                'calisan_id' => 4,
                'tarih' => Carbon::parse('2024-01-02'),
                'durum' => 'Raporlu',
            ],
            [
                'calisan_id' => 5,
                'tarih' => Carbon::parse('2024-01-03'),
                'durum' => 'Geldi',
            ],
            [
                'calisan_id' => 6,
                'tarih' => Carbon::parse('2024-01-03'),
                'durum' => 'Gelmedi',
            ],
            [
                'calisan_id' => 7,
                'tarih' => Carbon::parse('2024-01-04'),
                'durum' => 'Geldi',
            ],
            [
                'calisan_id' => 8,
                'tarih' => Carbon::parse('2024-01-04'),
                'durum' => 'İzinli',
            ],
            [
                'calisan_id' => 9,
                'tarih' => Carbon::parse('2024-01-05'),
                'durum' => 'Raporlu',
            ],
            [
                'calisan_id' => 10,
                'tarih' => Carbon::parse('2024-01-05'),
                'durum' => 'Gelmedi',
            ],
        ];

        DB::table('yoklama')->insert($yoklama);
    }
}
