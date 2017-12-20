<?php

use Illuminate\Database\Seeder;
use App\User;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {
        // Let's clear the users table first
        User::truncate();
        $imax = App\Church::count();
        $faker = \Faker\Factory::create();
        // Let's make sure everyone has the same password and 
        // let's hash it before the loop, or else our seeder 
        // will be too slow.
        $password = Hash::make('password');
        User::create([
                'first_name' => $faker->name,
                'last_name' => $faker->name,
                'user_name' => $faker ->name,
                'country'   => $faker->country,
                'sex'       => $faker->word,
                'phone' => $faker->e164PhoneNumber,
                'church_id' => 1,
                'role_id' => 2,
                'email' => 'admin@test.com',
                'password' => $password,
        ]);
        // And now let's generate a few dozen users for our app:
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'first_name' => $faker->name,
                'last_name' => $faker->name,
                'user_name' => $faker ->name,
                'country'   => $faker->country,
                'sex'       => $faker->word,
                'phone' => $faker->e164PhoneNumber,
                'church_id' => $faker->numberBetween($min = 1, $max = $imax),
                'role_id' => $faker->numberBetween($min = 1, $max = 3),
                'email' => $faker->unique()->email,
                'password' => $password,
            ]);
        }
         $this->command->info('users added');
    }
  
}

