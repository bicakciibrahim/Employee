<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('performans_degerlendirme', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('calisan_id');
            $table->integer('puan');  // Performans puanı
            $table->string('yorum');  // Performans değerlendirme yorumu
            $table->timestamps();

            $table->foreign('calisan_id')->references('id')->on('calisanlar')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performans_degerlendirme');
    }
};
