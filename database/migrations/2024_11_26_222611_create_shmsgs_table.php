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
        Schema::create('shmsgs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kabkota_id')->constrained('kabkotas')->cascadeOnDelete();
            $table->foreignId('kapkem_id')->constrained('kapkems')->cascadeOnDelete();
            $table->foreignId('kalkel_id')->constrained('kalkels')->cascadeOnDelete();
            $table->string('nohak')->nullable();
            $table->date('tglhak')->nullable();
            $table->string('nosu')->nullable();
            $table->date('tglsu')->nullable();
            $table->string('nib')->nullable();
            $table->integer('luassu')->nullable();
            $table->string('petunjuk')->nullable();
            $table->string('koordinat')->nullable();
            $table->string('upload_shm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shmsgs');
    }
};
