<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{


    public function up()
    {
        Schema::create('izinler', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('calisan_id');
            $table->unsignedBigInteger('izin_turu_id');
            $table->date('baslangic_tarihi');
            $table->date('bitis_tarihi');
            $table->text('aciklama')->nullable();
            $table->timestamps();

            $table->foreign('calisan_id')->references('id')->on('calisanlar')->onDelete('cascade');
            $table->foreign('izin_turu_id')->references('id')->on('izin_turleri')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('calisan_izinleri');
    }
}

