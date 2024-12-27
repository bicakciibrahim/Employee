<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissonTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izin_turleri', function (Blueprint $table) {
            $table->id(); // Otomatik artan birincil anahtar
            $table->string('izin_turu_adi', 100)->unique(); // İzin türü adı, benzersiz olmalı
            $table->text('aciklama')->nullable(); // Açıklama alanı, isteğe bağlı
            $table->timestamps(); // created_at ve updated_at sütunları
        });
    }


    public function down()
    {
        Schema::dropIfExists('izin_turleri');
    }
}
