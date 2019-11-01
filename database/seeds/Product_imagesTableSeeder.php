<?php
use App\Product_image;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class Product_imagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            Product_image::create([
                'product_id' => $faker->ean8,
                'url' => ('p1.jpg')
            ]);
        }
    }
}
