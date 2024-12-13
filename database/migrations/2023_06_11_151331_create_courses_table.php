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
            $table->foreignID('category_id')->constrained('course_categories','id');
            $table->foreignID('department_id')->constrained('departments','id');
            $table->float('price');
            $table->string('duration');
            $table->date('date_start');
            $table->integer('max_student');
            $table->text('description');
            $table->string('level');
            $table->binary('photo');
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
