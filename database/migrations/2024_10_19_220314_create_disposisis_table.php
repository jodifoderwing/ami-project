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
        Schema::create('disposisis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('surmasuk_id')->constrained()->cascadeOnDelete();
            $table->foreignId('pegawai_id')->constrained()->cascadeOnDelete();
            $table->date('tgl_dispo');
            $table->date('tgl_terima')->nullable();
            $table->date('tgl_selesai')->nullable();
            $table->string('upload_foto')->nullable();
            $table->string('upload_dokumen')->nullable();
            $table->string('arahan')->nullable();
            $table->text('catatan')->nullable();
            $table->string('status')->default('disposisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disposisis');
    }
};
