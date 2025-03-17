<?php

namespace Database\Seeders;
use App\Models\Pegawai;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            Pegawai::create([
                'nama' => $faker->name,
                'divisi' => $faker->randomElement(['HR', 'IT', 'Finance', 'Marketing']),
            ]);
        }
    }
}
