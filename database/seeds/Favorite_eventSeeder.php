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
         $imax = Event::count();
         $nmax = User::count();
         $faker = \Faker\Factory::create();
           for ($i = 0; $i < 10; $i++) {
           DB::table('favorite_events')->insert([
             'user_id' =>$faker->numberBetween($min = 1, $max = $imax),
             'event_id'=>$faker->numberBetween($min = 1, $max = $nmax),
             'created_at'=>$faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
             'updated_at'=>$faker->dateTime($max = 'now', $timezone = date_default_timezone_get())
             ]);
            }
        $this->command->info('favorite events added');
    }

}
