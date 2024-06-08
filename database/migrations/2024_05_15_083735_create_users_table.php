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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->unique()->nullable();
            $table->text('alamat')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->enum('gender', ['pria', 'wanita', ''])->nullable();
            $table->string('foto_profil')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->enum('status', ['bekerja', 'belum bekerja'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
