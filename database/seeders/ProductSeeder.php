<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Loop untuk generate 200 data produk menggunakan DB facade
        for ($i = 0; $i < 200; $i++) {
            DB::table('products')->insert([
                'nama' => fake()->word(),
                'jumlah' => fake()->numberBetween(10, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
