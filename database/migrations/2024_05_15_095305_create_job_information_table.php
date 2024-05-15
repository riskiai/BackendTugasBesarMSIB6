<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_detail_id');
            $table->unsignedBigInteger('job_category_id');
            $table->string('company_name');
            $table->string('short_job');
            $table->integer('salary');
            $table->string('position');
            $table->string('short_description');
            $table->string('location');
            $table->string('company_address');
            $table->timestamps();

            $table->foreign('job_detail_id')->references('id')->on('job_details');
            $table->foreign('job_category_id')->references('id')->on('job_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_information');
    }
};
