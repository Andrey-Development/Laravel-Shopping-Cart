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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->decimal(
                'total_amount',
                10,
                2,
            );
            $table
                ->string(
                    'delivery_status',
                    100,
                )
                ->default('Aguardando aprovação');
            $table
                ->foreignId('payment_method_id')
                ->constrained(
                    table: 'payment_methods',
                    indexName: 'payments_payment_method_id',
                );
            $table
                ->foreignId('user_id')
                ->constrained(
                    table: 'users',
                    indexName:'payments_user_id',
                );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
