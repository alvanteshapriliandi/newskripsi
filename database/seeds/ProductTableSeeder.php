<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Product;
use App\Image;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        Product::truncate();

        foreach(range(1, 10) as $i){
            $product = Product::create([
            'jdl_Pdk' => $faker->sentence,
            'freelancer_id' => $i,
            'subcategory_id' => mt_rand(1, 10),
            'hrg_awal' => mt_rand(10000, 100000),
            'hrg_promo' => 'hrg_awal'-5000,
            'description' => $faker->paragraph(mt_rand(10, 100))
            ]);

            foreach(range(1, 10) as $j){
                Image::create([
                    'product_id' => $product->id,
                    'file' => "test.png"
                ]);
            }
        }
    }
}
