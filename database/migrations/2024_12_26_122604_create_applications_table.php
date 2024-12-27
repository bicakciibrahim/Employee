<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('basvurular', function (Blueprint $table) {
            $table->id();
            $table->string('isim');
            $table->string('email')->nullable();
            $table->string('telefon')->nullable();
            $table->foreignId('birim_id')->constrained('birimler')->onDelete('cascade'); // Başvurulan birim
            $table->text('mesaj')->nullable(); // Adaydan ek bilgi
            $table->timestamps();
        });
    }
    public function applications()
    {
        return $this->hasMany(Application::class, 'birim_id');  // Department ile Application arasında ilişki
    }

    public function down()
    {
        Schema::dropIfExists('basvurular');
    }
}
