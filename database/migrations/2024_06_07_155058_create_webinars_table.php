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
        Schema::create('webinars', function (Blueprint $table) {
            $table->id();
            $table->string('name_speaker')->nullable();
            $table->string('short_description')->nullable();
            $table->text('detail_description')->nullable();
            $table->string('judul_webinar')->nullable();
            $table->string('mengadakan_acara')->nullable();
            $table->string('judul_deskripsi')->nullable();
            $table->string('nama_pengada_acara')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('waktu')->nullable();
            $table->string('platform')->nullable();
            $table->string('lokasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webinars');
    }
};
