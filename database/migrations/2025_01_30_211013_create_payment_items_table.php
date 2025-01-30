<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment_items', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('payment_id')
                ->constrained(
                    table: 'payments',
                    indexName: 'payment_items_payment_id',
                );
            $table
                ->foreignId('product_id')
                ->constrained(
                    table: 'products',
                    indexName: 'payment_items_product_id',
                );
            $table->integer('quantity');
            $table->decimal(
                'unit_price',
                10,
                2,
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_items');
    }
};
