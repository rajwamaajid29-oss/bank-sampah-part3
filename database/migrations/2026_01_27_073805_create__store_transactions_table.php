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
        Schema::create('store_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_code');
            $table->date('transaction_date');
            $table->foreignId('customer_id')->constrained()->cascadeOnDelete();
            $table->string('seller_id');
            $table->integer('total_amount');
            $table->string('payment_method');
            $table->string('payment_status');
            $table->string('transaction_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_store_transactions');
    }
};
