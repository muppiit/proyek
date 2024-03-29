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
        Schema::create('warga_pidah_keluar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_penduduk');
            $table->foreign('id_penduduk')->references('id')->on('penduduk')->onDelete('cascade');
            $table->unsignedBigInteger('id_rt');
            $table->foreign('id_rt')->references('id')->on('rt')->onDelete('cascade');
            $table->string('alamat_tujuan');
            $table->date('tanggal_pindah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warga_pidah_keluar');
    }
};
