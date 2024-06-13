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
        Schema::create('lowongans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->string('judul');
            $table->enum('jenis', ['kerja', 'magang']);
            $table->string('bidang');
            $table->string('perusahaan');
            $table->text('deskripsi_singkat');
            $table->text('deskripsi_lengkap');
            $table->enum('tipe', ['onsite', 'online', 'hybrid']);
            $table->string('lokasi')->nullable();
            $table->integer('gaji')->nullable();
            $table->text('kualifikasi')->nullable();
            $table->date('deadline')->nullable();
            $table->date('tanggal_mulai');
            $table->date('tanggal_berakhir');
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongans');
    }
};
