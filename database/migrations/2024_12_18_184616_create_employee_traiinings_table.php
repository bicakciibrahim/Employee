<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTraiiningsTable extends Migration
{
    public function up()
    {
        Schema::create('calisan_egitimleri', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('calisan_id'); // Çalışan ID
            $table->unsignedBigInteger('egitim_turu_id'); // Eğitim türü ID
            $table->date('egitim_tarihi'); // Eğitim tarihi
            $table->string('egitim_durumu'); // Eğitim durumu (Başarılı, Başarısız, Devam Ediyor vb.)
            $table->timestamps();

            // Foreign key'ler
            $table->foreign('calisan_id')->references('id')->on('calisanlar')->onDelete('cascade');
            $table->foreign('egitim_turu_id')->references('id')->on('egitim_turu')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('calisan_egitimleri');
    }
}
