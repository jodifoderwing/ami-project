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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->string('alamat')->nullable();
            $table->string('genre');
            $table->string('no_hp');
            $table->string('foto');
            $table->string('ktp')->nullable();
            $table->string('nama_pd')->nullable();
            $table->string('email')->nullable();
            $table->foreignId('agama_id')->constrained()->cascadeOnDelete();
            $table->foreignId('pemkraton_id')->constrained()->cascadeOnDelete();
            $table->foreignId('jabatan_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
