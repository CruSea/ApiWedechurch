<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Event;

class Favorite_eventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  
       public function run()
    {
    	 DB::table('favorite_events')->delete();
         $imax = User::count();
         $nmax = Event::count();

          $faker = \Faker\Factory::create();
           for ($i = 0; $i < 10; $i++) {
           DB::table('favorite_events')->create([
             'user_id' => numberBetween($min = 1, $max = $imax),
             'event_id' => numberBetween($min = 1, $max = $nmax)
             ])
       }
       $this->command->info('favorite_events added');
    }

}
