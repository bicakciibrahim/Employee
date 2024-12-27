<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTrainingSeeder extends Seeder
{
    public function run()
    {
        $calisanEgitimleri = [
            ['calisan_id' => 1, 'egitim_turu_id' => 1, 'egitim_tarihi' => '2023-01-15', 'egitim_durumu' => 'Başarılı'],
            ['calisan_id' => 2, 'egitim_turu_id' => 2, 'egitim_tarihi' => '2023-02-20', 'egitim_durumu' => 'Başarısız'],
            ['calisan_id' => 3, 'egitim_turu_id' => 3, 'egitim_tarihi' => '2023-03-05', 'egitim_durumu' => 'Devam Ediyor'],
            ['calisan_id' => 4, 'egitim_turu_id' => 1, 'egitim_tarihi' => '2023-04-10', 'egitim_durumu' => 'Başarılı'],
            ['calisan_id' => 5, 'egitim_turu_id' => 4, 'egitim_tarihi' => '2023-05-12', 'egitim_durumu' => 'Başarısız'],
            ['calisan_id' => 6, 'egitim_turu_id' => 5, 'egitim_tarihi' => '2023-06-18', 'egitim_durumu' => 'Devam Ediyor'],
            ['calisan_id' => 7, 'egitim_turu_id' => 2, 'egitim_tarihi' => '2023-07-25', 'egitim_durumu' => 'Başarılı'],
            ['calisan_id' => 8, 'egitim_turu_id' => 3, 'egitim_tarihi' => '2023-08-30', 'egitim_durumu' => 'Başarılı'],
            ['calisan_id' => 9, 'egitim_turu_id' => 4, 'egitim_tarihi' => '2023-09-10', 'egitim_durumu' => 'Başarısız'],
            ['calisan_id' => 10, 'egitim_turu_id' => 5, 'egitim_tarihi' => '2023-10-01', 'egitim_durumu' => 'Devam Ediyor'],
        ];

        DB::table('calisan_egitimleri')->insert($calisanEgitimleri);
    }
}
