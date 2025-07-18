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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->string('order_number')->unique();
            $table->dateTime('order_date')->default(now());
            $table->enum('status', ['pending', 'paid', 'shipped', 'completed', 'cancelled'])->default('pending');
            $table->decimal('total_amount', 15, 2)->default(0);
            $table->string('payment_method')->nullable();
            $table->enum('payment_status', ['paid', 'unpaid', 'partial'])->default('unpaid');
            $table->string('shipping_address')->nullable();
            $table->decimal('shipping_cost', 10, 2)->nullable();
            $table->enum('shipping_status', ['processing', 'shipped', 'delivered', 'returned'])->default('processing');
            $table->text('notes')->nullable();
            $table->decimal('discount', 10, 2)->nullable(); // perbaikan nama kolom 'discount'
            $table->timestamps(); // tambahkan jika belum ada
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
