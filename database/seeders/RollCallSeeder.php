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
                'giris_saati' => '09:00:00',
                'cikis_saati' => '17:00:00',
                'durum' => 'Geldi',
            ],
            [
                'calisan_id' => 2,
                'tarih' => Carbon::parse('2024-01-01'),
                'giris_saati' => null,
                'cikis_saati' => null,
                'durum' => 'Gelmedi',
            ],
            [
                'calisan_id' => 3,
                'tarih' => Carbon::parse('2024-01-02'),
                'giris_saati' => '10:00:00',
                'cikis_saati' => '14:00:00',
                'durum' => 'İzinli',
            ],
            [
                'calisan_id' => 4,
                'tarih' => Carbon::parse('2024-01-02'),
                'giris_saati' => '09:30:00',
                'cikis_saati' => '17:00:00',
                'durum' => 'Geç Geldi',
            ],
            [
                'calisan_id' => 5,
                'tarih' => Carbon::parse('2024-01-03'),
                'giris_saati' => '09:00:00',
                'cikis_saati' => '17:00:00',
                'durum' => 'Geldi',
            ],
            [
                'calisan_id' => 6,
                'tarih' => Carbon::parse('2024-01-03'),
                'giris_saati' => null,
                'cikis_saati' => null,
                'durum' => 'Gelmedi',
            ],
            [
                'calisan_id' => 7,
                'tarih' => Carbon::parse('2024-01-04'),
                'giris_saati' => '08:45:00',
                'cikis_saati' => '16:30:00',
                'durum' => 'Geldi',
            ],
            [
                'calisan_id' => 8,
                'tarih' => Carbon::parse('2024-01-04'),
                'giris_saati' => '09:00:00',
                'cikis_saati' => '17:00:00',
                'durum' => 'İzinli',
            ],
            [
                'calisan_id' => 9,
                'tarih' => Carbon::parse('2024-01-05'),
                'giris_saati' => '09:00:00',
                'cikis_saati' => '17:00:00',
                'durum' => 'Geç Geldi',
            ],
            [
                'calisan_id' => 10,
                'tarih' => Carbon::parse('2024-01-05'),
                'giris_saati' => null,
                'cikis_saati' => null,
                'durum' => 'Gelmedi',
            ],
        ];

        DB::table('yoklama')->insert($yoklama);
    }
}
