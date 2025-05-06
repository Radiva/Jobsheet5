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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 20);
            $table->string('nama_siswa', 60);
            $table->enum('jenis_kelamin', ['L','P']);
            $table->string('tempat_lahir', 100);
            $table->date('tanggal_lahir');
            $table->foreignId('id_kelas')->references('id')->on('kelas');
            $table->foreignId('id_wali')->references('id')->on('wali_murid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
