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
        Schema::create('vacancy_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_category_id');
            $table->string('location');
            $table->string('education');
            $table->enum('type', ['full-time', 'part-time']);
            $table->integer('salary');
            $table->text('experience');
            $table->enum('remote', ['remote', 'onsite', 'hybrid']);
            $table->timestamps();

            $table->foreign('job_category_id')->references('id')->on('job_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancy_categories');
    }
};
