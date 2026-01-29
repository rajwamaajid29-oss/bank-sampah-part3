<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('store_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_code');
            $table->date('transaction_date'); // harus tanggal valid
            $table->foreignId('customer_id')->constrained()->cascadeOnDelete();
            $table->foreignId('collector_id')->constrained()->cascadeOnDelete();
            $table->integer('total_amount');
            $table->string('payment_method');
            $table->string('payment_status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
}

};