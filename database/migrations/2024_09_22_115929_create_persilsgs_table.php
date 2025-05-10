<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('persilsgs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kabkota_id')->constrained('kabkotas')->cascadeOnDelete();
            $table->foreignId('kapkem_id')->constrained('kapkems')->cascadeOnDelete();
            $table->foreignId('kalkel_id')->constrained('kalkels')->cascadeOnDelete();
            $table->foreignId('padkam_id')->constrained('padkams')->cascadeOnDelete();
            $table->string('no');
            $table->integer('luas');
            $table->string('koordinat');
            $table->string('jenis');
            $table->string('ket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persilsgs');
    }
};
