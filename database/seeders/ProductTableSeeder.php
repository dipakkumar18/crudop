<?php

namespace Database\Seeders;


use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            $product = new product();
            $product->name = $faker->name;
            $product->brand_name = $faker->name;
            $product->price = $faker->randomNumber(3);
            $product->description = $faker->text();

            $product->save();
        }
        // product::factory()->count(10)->create();
    }
}
