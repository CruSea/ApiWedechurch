<?php

use Illuminate\Database\Seeder;
use App\Church;
use App\Denomination;
use Faker\Provider\en_US\Address;

class ChurchSeeder extends Seeder
{
  

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           // Let's clear the churches table first
        Church::truncate();
        $imax = Denomination::count();
        $faker = \Faker\Factory::create();
        // Let's make sure everyone has the same password and 
        // let's hash it before the loop, or else our seeder 
        // will be too slow.
        $password = Hash::make('password');
        Church::create([
                'name' => $faker->company,
                'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'state' => $faker->state,
                'country'  => $faker->country,
                'location' => $faker->name,
                'phone' => $faker->e164PhoneNumber,
                'latitude' => $faker->latitude($min = 7, $max = 8),
                'longitude'=> $faker->longitude($min = 38, $max = 39),
                'weburl' => $faker->url,
                'banner' => $faker->imageUrl($width = 640, $height = 480),
                'logo'=>$faker->imageUrl($width = 640, $height = 480),
                'denomination_id' => null,
                'parent_church_id' => null,
                
                
        ]);
        // And now let's generate a few dozen users for our app:
        for ($i = 0; $i < 10; $i++) {
            Church::create([
                'name' => $faker->company,
                'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'state' => $faker->state,
                'country'  => $faker->country,
                'location' => $faker->Address,
                'phone' => $faker->e164PhoneNumber,
                'latitude' => $faker->latitude($min = 7, $max = 8),
                'longitude'=> $faker->longitude($min = 38, $max = 39),
                'weburl' => $faker->url,
                'banner' => $faker->imageUrl($width = 640, $height = 480),
                'logo'=>$faker->imageUrl($width = 640, $height = 480),
                'denomination_id' => random_int(1,$imax),
                'parent_church_id' =>1
            ]);
        }
        $this->command->info('Churches added');
    
}
}
