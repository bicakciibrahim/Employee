<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuggestionsTable extends Migration
{
    public function up()
    {
        Schema::create('oneris', function (Blueprint $table) {
            $table->id();
            $table->string('isim');
            $table->string('email')->nullable();
            $table->string('telefon')->nullable();
            $table->text('mesaj');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('oneris');
    }
}
