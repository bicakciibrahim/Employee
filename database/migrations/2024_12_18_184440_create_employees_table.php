<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('calisanlar', function (Blueprint $table) {
            $table->id(); // Otomatik artan ID
            $table->string('ad');
            $table->string('soyad');
            $table->string('email')->unique();
            $table->string('telefon')->nullable();
            $table->unsignedBigInteger('calisan_turu_id'); // Çalışan türü ID
            $table->unsignedBigInteger('birim_id'); // Birim ID
            $table->unsignedBigInteger('gorev_id'); // Görev ID
            $table->date('ise_baslangic_tarihi'); // İşe başlama tarihi
            $table->date('son_calisma_tarihi')->nullable(); // İsteğe bağlı
            $table->decimal('maas', 10, 2); // Maaş bilgisi
            $table->timestamps();

            // Yabancı anahtar tanımları
            $table->foreign('calisan_turu_id')->references('id')->on('calisan_turleri')->onDelete('cascade');
            $table->foreign('birim_id')->references('id')->on('birimler')->onDelete('cascade');
            $table->foreign('gorev_id')->references('id')->on('gorevler')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('calisanlar');
    }
}
