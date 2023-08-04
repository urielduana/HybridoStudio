<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // This function generates 150 products with random data
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 150; ++$i) {
            DB::table('product')->insert([
                'name' => $faker->word,
                'price' => $faker->randomFloat(2, 0, 1000),
                'barcode' => $faker->ean13,
                'stock' => $faker->numberBetween(0, 100),
                'category_id' => $faker->numberBetween(1, 10),
                // Timestamps
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]);
        }
    }
}
