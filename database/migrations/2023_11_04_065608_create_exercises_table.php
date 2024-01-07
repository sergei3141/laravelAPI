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
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique();
            $table->string('tag')->nullable();
            $table->string('rank')->nullable();
            $table->string('link')->nullable();
            $table->string('tests')->nullable();
            $table->string('testKeys')->nullable();
            $table->string('defaultFunction')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
