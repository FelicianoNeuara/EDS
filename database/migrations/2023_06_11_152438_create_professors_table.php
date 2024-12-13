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
        Schema::create('professors', function (Blueprint $table) {
            $table->id();
            $table->foreignID('department_id')->constrained('departments','id');
            $table->foreignID('course_id')->constrained('courses','id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('contact')->unique();
            $table->string('city');
            $table->string('country');
            $table->date('date_birth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professors');
    }
};
