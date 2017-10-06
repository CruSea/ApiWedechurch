<?php

use Illuminate\Database\Seeder;
use App\Church;
use App\user;


class Favorite_churchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 DB::table('favorite_church')->delete();
         $imax = User::count();
         $nmax = Church::count();
         $faker = \Faker\Factory::create();
           for ($i = 0; $i < 10; $i++) {
           DB::table('favorite_church')->insert([
             'user_id' =>$faker->numberBetween($min = 1, $max = $imax),
             'church_id'=>$faker->numberBetween($min = 1, $max = $nmax),
             ]);
            }
        $this->command->info('favorite_churches added');
    }
    
}
