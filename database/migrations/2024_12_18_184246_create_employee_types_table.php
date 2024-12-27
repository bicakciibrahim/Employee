<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTypesTable extends Migration
{
    public function up()
    {
        Schema::create('calisan_turleri', function (Blueprint $table) {
            $table->id(); // Otomatik artan ID
            $table->string('tur_adi', 100)->unique(); // Benzersiz çalışan türü adı
            $table->text('aciklama')->nullable(); // İsteğe bağlı açıklama alanı
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('calisan_turleri');
    }
}
