<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// PaymentMethodsSeeder
class DatabaseSeeder_3 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payment_methods')->insert([
            [
                'name' => 'Pix',
                'parcels' => 0,
                'discount' => 10,
                'interest_month' => null,
                'payment_type_id' => 1,
            ],
            [
                'name' => 'Crédito à Vista',
                'parcels' => 1,
                'discount' => 10,
                'interest_month' => null,
                'payment_type_id' => 1,
            ],
        ]);

        for ($i = 2; $i <= 12; $i++) {
            DB::table('payment_methods')->insert([
                'name' => "Crédito {$i}X",
                'parcels' => $i,
                'discount' => null,
                'interest_month' => 1,
                'payment_type_id' => 2,
            ]);
        }
    }
}
