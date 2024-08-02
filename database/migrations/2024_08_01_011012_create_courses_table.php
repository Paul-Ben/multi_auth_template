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
            $table->string('courseTitle');
            $table->string('courseDescription');
            $table->string('courseCode');
            $table->string('courseLevel');
            $table->enum('courseCategory', ['coreCourse', 'elective','carryOver']);
            $table->integer('courseCreditUnit');
            $table->foreignId('department_id')->constrained('departments');
            $table->foreignId('faculty_id')->constrained('faculties');
            $table->string('courseLecturer')->nullable();
            $table->string('coursePrerequisites')->nullable();
            $table->string('semester');
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
