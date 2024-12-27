<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeOfEducationTable extends Migration
{
    public function up()
    {
        Schema::create('egitim_turu', function (Blueprint $table) {
            $table->id();
            $table->string('ad');
            $table->string('aciklama')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('egitim_turleri');
    }
}

