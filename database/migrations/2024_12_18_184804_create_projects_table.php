<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
/**
* Run the migrations.
*/
public function up()
{
Schema::create('projeler', function (Blueprint $table) {
$table->id();
$table->string('ad');
$table->text('aciklama');
$table->date('baslangic_tarihi');
$table->date('bitis_tarihi');
$table->unsignedBigInteger('calisan_id'); // Yabancı anahtar sütunu
$table->timestamps();

// Yabancı anahtar tanımı
$table->foreign('calisan_id')->references('id')->on('calisanlar')->onDelete('cascade');
});
}

/**
* Reverse the migrations.
*/
public function down(): void
{
Schema::dropIfExists('projeler');
}
};
