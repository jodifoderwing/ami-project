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
        Schema::create('berkas', function (Blueprint $table) {
            $table->id();
            $table->string('noberkas');
            $table->date('tglberkas');
            $table->foreignId('kabkota_id')->constrained('kabkotas')->cascadeOnDelete();
            $table->foreignId('kapkem_id')->constrained('kapkems')->cascadeOnDelete();
            $table->foreignId('kalkel_id')->constrained('kalkels')->cascadeOnDelete();
            $table->foreignId('padkam_id')->constrained('padkams')->cascadeOnDelete();
            $table->string('alashak');
            $table->integer('luas');
            $table->string("nik");
            $table->string('nama');
            $table->string('tmplahir');
            $table->date('tgllahir');
            $table->string('alamat');
            $table->string('nohp');
            $table->string('permohonan');
            $table->integer('biaya_daftar');
            $table->string('step')->default('pendaftaran');
            $table->string('nokwit')->nullable();
            $table->date('tglkwit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas');
    }
};
