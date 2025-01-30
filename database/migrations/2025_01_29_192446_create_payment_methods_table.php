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
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('parcels');
            $table
                ->decimal(
                    'discount',
                    10,
                    2,
                )
                ->nullable();
            $table
                ->decimal(
                    'interest_month',
                    10,
                    2,
                )
                ->nullable();
            $table
                ->foreignId('payment_type_id')
                ->constrained(
                    table: 'payment_types',
                    indexName: 'payment_methods_type_id',
                );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_methods');
    }
};
