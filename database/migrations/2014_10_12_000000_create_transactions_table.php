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
        Schema::create('transactions', function (Blueprint $transaction) {
            $transaction->id();
            $transaction->string('student')->nullable();
            $transaction->string('ip')->nullable();
            $transaction->integer('user_paid')->nullable();
            $transaction->integer('fixed_sale')->nullable();
            $transaction->integer('percent_sale')->nullable();
            $transaction->integer('add_to_balance')->nullable();
            $transaction->integer('total_balance')->nullable();
            $transaction->string('personal_sale_info')->nullable();
            $transaction->string('student_phone')->nullable();
            $transaction->integer('balance_was')->nullable();
            $transaction->timestamp('created_at')->nullable();
            $transaction->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
