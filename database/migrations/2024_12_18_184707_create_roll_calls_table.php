<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('yoklama', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('calisan_id');
            $table->date('tarih');
            $table->time('giris_saati')->nullable(); // Giris saati nullable
            $table->time('cikis_saati')->nullable(); // Cikis saati nullable
            $table->enum('durum', ['Geldi', 'Gelmedi', 'Geç Geldi', 'İzinli'])->default('Geldi');
            $table->timestamps();

            // Foreign Key
            $table->foreign('calisan_id')->references('id')->on('calisanlar')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('yoklama');
    }
};
