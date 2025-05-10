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
        Schema::create('surmasuks', function (Blueprint $table) {
            $table->id();
            $table->integer('no_surmas');
            $table->date('tgl_surmas');
            $table->string('no_surat');
            $table->date('tgl_surat');
            $table->string('nama_pengirim');
            $table->string('perihal');
            $table->string('ket')->nullable();
            $table->string('status')->default('register');
            $table->string('dok_arsip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surmasuks');
    }
};
