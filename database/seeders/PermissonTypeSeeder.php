<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissonTypeSeeder extends Seeder
{
    public function run()
    {
        $izinTurleri = [
            ['izin_turu_adi' => 'Yıllık İzin', 'aciklama' => 'Çalışanların yıllık olarak kullanabileceği izin'],
            ['izin_turu_adi' => 'Hastalık İzni', 'aciklama' => 'Çalışanın hastalanması durumunda verilen izin'],
            ['izin_turu_adi' => 'Mazeret İzni', 'aciklama' => 'Çalışanın belirli bir mazereti nedeniyle verilen izin'],
            ['izin_turu_adi' => 'Doğum İzni', 'aciklama' => 'Çalışanın doğum yapması durumunda verilen izin'],
            ['izin_turu_adi' => 'Evlilik İzni', 'aciklama' => 'Çalışanın evlenmesi durumunda verilen izin'],
            ['izin_turu_adi' => 'Baba İzni', 'aciklama' => 'Çalışanın eşinin doğum yapması durumunda verilen izin'],
            ['izin_turu_adi' => 'Refakat İzni', 'aciklama' => 'Çalışanın hasta bir yakınına bakmak için verilen izin'],
            ['izin_turu_adi' => 'Aylık İzin', 'aciklama' => 'Çalışanın belirli bir süreyle belirli aralıklarla aldığı izin'],
            ['izin_turu_adi' => 'Ücretsiz İzin', 'aciklama' => 'Çalışanın maaş almadan aldığı izin'],
            ['izin_turu_adi' => 'Yol İzni', 'aciklama' => 'Çalışanın iş gereği yaptığı seyahatler için verilen izin'],
        ];

        DB::table('izin_turleri')->insert($izinTurleri);
    }
}
