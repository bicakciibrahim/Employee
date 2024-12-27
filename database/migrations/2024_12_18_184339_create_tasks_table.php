<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('gorevler', function (Blueprint $table) {
            $table->id(); // Otomatik artan ID

            $table->string('gorev_adi');
            $table->date('baslangic_tarihi')->nullable(); // Görev başlangıç tarihi
            $table->date('bitis_tarihi')->nullable(); // Görev bitiş tarihi
            $table->enum('durum', ['Beklemede', 'Devam Ediyor', 'Tamamlandı'])->default('Beklemede'); // Görev durumu
            $table->timestamps(); // created_at ve updated_at


        });
    }

    public function down()
    {
        Schema::dropIfExists('gorevler');
    }
}
