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
        Schema::create('job_details', function (Blueprint $table) {
            $table->id();
            $table->text('detail_description');
            $table->string('level_pekerjaan');
            $table->enum('pendidikan', ['SMA', 'D3', 'S1/D4']);
            $table->enum('tipe_pekerjaan', ['remote', 'onsite', 'hybrid']);
            $table->text('tugas');
            $table->text('tanggung_jawab');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_details');
    }
};
