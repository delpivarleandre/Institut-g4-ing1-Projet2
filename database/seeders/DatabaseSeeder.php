<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
       
        $faker = Faker::create();

        foreach(range(1,10) as $index) {
            DB::table('devis')->insert([
                'name'=> $faker->name,
                'email'=> $faker->email,
                'phone'=> $faker->phoneNumber
            ]);
        }
    }
}
