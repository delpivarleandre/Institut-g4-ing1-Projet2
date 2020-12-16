<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        DB::table('role_user')->truncate();

        $admin = User::create([

            'name'=> 'admin',
            'email'=> 'admin@admin.com',
            'password'=>Hash::make('password')

        ]);

        $vendeur = User::create([

            'name'=> 'vendeur',
            'email'=> 'vendeur@vendeur.com',
            'password'=>Hash::make('password')

        ]);

        $pro = User::create([

            'name'=> 'pro',
            'email'=> 'pro@pro.com',
            'password'=>Hash::make('password')

        ]);

        $particulier = User::create([

            'name'=> 'particulier',
            'email'=> 'particulier@par.com',
            'password'=>Hash::make('password')

        ]);


        
        $adminRole = Role::where('name', 'admin')->first();
        $vendeurRole = Role::where('name', 'vendeur')->first();
        $proRole = Role::where('name', 'pro')->first();
        $particulierRole = Role::where('name', 'particulier')->first();
        

        $admin->roles()->attach($adminRole);
        $vendeur->roles()->attach($vendeurRole);
        $pro->roles()->attach($proRole);
        $particulier->roles()->attach($particulierRole);
       


    }
}
