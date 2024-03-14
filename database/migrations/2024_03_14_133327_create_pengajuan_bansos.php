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
        Schema::create('pengajuan_bansos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_penduduk');
            $table->foreign('id_penduduk')->references('id')->on('penduduk')->onDelete('cascade');
            $table->unsignedBigInteger('id_rt');
            $table->foreign('id_rt')->references('id')->on('rt')->onDelete('cascade');
            $table->string('status_pengajuan');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_bansos');
    }
};
