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
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id');
            $table->string('theme')->nullable();
            $table->integer('lesson_num')->nullable();
            $table->string('hw')->nullable();
            $table->string('cw')->nullable();
            $table->string('comments')->nullable();
            $table->string('pptx')->nullable();
            $table->string('docx')->nullable();
            $table->string('project')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};
