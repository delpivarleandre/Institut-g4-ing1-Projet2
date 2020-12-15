<?php

namespace Database\Seeders;
use App\Models\Product;

use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i <10; $i++) { 
            Product::create([
                'title'=>$faker->sentence(4),
                'slug'=>$faker->slug,
                'price'=>$faker->numberBetween(15,300) * 100,
                'image'=> 'https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80'
          ]);     
        }
    }
}
