<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
 

    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 1; $i <= 15; $i++ ){

        User::create([
            'name' => User::inRandomOrder()->first()->id, 
            'email' => $faker->email(),    
            'password' => $faker->password(),          
        ]);
             

        }
    }
}
