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
        Schema::create('kinerjas', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('kegiatan');
            $table->string('deskripsi');
            $table->string('satuan');
            $table->integer('target');
            $table->integer('nilai')->nullable();
            $table->string('tabel')->nullable();
            $table->string('indikator')->nullable();
            $table->string('nosk')->nullable();
            $table->date('tglsk')->nullable();
            $table->string('koordinator');
            $table->string('anggota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kinerjas');
    }
};
