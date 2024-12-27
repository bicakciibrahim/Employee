<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncentivesAndBonusesTable extends Migration
{
    public function up()
    {
        Schema::create('tesvik_primler', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('calisan_id');
            $table->decimal('tutar', 10, 2); // Prim tutarı
            $table->date('odeme_tarihi');
            $table->string('aciklama', 255)->nullable(); // Primle ilgili açıklama
            $table->timestamps();

            // Foreign key relation
            $table->foreign('calisan_id')->references('id')->on('calisanlar')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tesvik_primler');
    }
}
