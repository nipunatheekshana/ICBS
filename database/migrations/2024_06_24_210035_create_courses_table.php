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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->double('price');
            $table->string('duration');
            $table->string('min_students');
            $table->string('skill_level');
            $table->string('language');
            $table->longText('description');
            $table->longText('curriculum');
            $table->longText('career_path');
            $table->foreignId('department_id')->constrained(
                table: 'departments', indexName: 'department_id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
