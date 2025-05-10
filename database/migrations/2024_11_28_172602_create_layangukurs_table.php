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
        Schema::create('layangukurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kabkota_id')->constrained('kabkotas')->cascadeOnDelete();
            $table->foreignId('kapkem_id')->constrained('kapkems')->cascadeOnDelete();
            $table->foreignId('kalkel_id')->constrained('kalkels')->cascadeOnDelete();
            $table->foreignId('padkam_id')->constrained('padkams')->cascadeOnDelete();
            $table->string('nomor')->nullable();
            $table->date('tanggal')->nullable();
            $table->integer('npk')->nullable();
            $table->integer('luas')->nullable();
            $table->string('koordinat')->nullable();
            $table->string('alamat')->nullable();
            $table->string('pemanfaat')->nullable();
            $table->string('pemanfaatan')->nullable();
            $table->string('ket')->nullable();
            $table->string('upload_su')->nullable();
            $table->string('upload_kk')->nullable();
            $table->string('upload_bk')->nullable();
            $table->string('status')->default('DT');
            $table->string('no_pal')->nullable();
            $table->date('tgl_pal')->nullable();
            $table->integer('masa_pal')->nullable();
            $table->date('tgl_pal_akhir')->nullable();
            $table->string('upload_pal')->nullable();
            $table->boolean('is_pal')->default(false);
            $table->string('no_kk')->nullable();
            $table->date('tgl_kk')->nullable();
            $table->integer('masa_kk')->nullable();
            $table->date('tgl_kk_akhir')->nullable();
            $table->boolean('is_kk')->default(false);
            $table->integer('shmsg_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layangukurs');
    }
};
