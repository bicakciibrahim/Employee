<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    public function up()
    {
        Schema::create('maaslar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('calisan_id');
            $table->decimal('tutar', 10, 2); // Maaş tutarı
            $table->date('odeme_tarihi');
            $table->timestamps();

            // Foreign key relation
            $table->foreign('calisan_id')->references('id')->on('calisanlar')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('maaslar');
    }
}
