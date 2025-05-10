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
        Schema::create('persils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('padkam_id')->constrained()->cascadeOnDelete();
            $table->string('Nomor');
            $table->string('klas');
            $table->integer('luas');
            $table->string('jenis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persils');
    }
};
