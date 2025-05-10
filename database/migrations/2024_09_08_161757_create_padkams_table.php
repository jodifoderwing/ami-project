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
        Schema::create('padkams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kalkel_id')->constrained()->cascadeOnDelete();
            $table->foreignId('kapkem_id')->constrained()->cascadeOnDelete();
            $table->foreignId('kabkota_id')->constrained()->cascadeOnDelete();
            $table->string('type');
            $table->string('nama');
            $table->string('kantor')->nullable();
            $table->string('alamat')->nullable();
            $table->string('koordinat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('padkams');
    }
};
