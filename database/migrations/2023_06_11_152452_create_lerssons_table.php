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
        Schema::create('lerssons', function (Blueprint $table) {
            $table->id();
            $table->foreignID('course_id')->constrained('courses','id');
            $table->string('title');
            $table->text('description');
            $table->date('date_start');
            $table->string('status')->default('Pendente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lerssons');
    }
};
