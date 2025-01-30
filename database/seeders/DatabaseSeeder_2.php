<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// PaymentTypeSeeder
class DatabaseSeeder_2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payment_types')->insert([
            ['id' => 1, 'name' => 'À Vista'],
            ['id' => 2, 'name' => 'A Prazo'],
        ]);
    }
}
