<?php

use Illuminate\Database\Seeder;
use App\Event;
use App\Event_category;
use App\Church;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::truncate();
      $ecmax = Event_category::count();
       $cmax = Church::count();
       $faker = \Faker\Factory::create();
       for ($i = 0; $i < 10; $i++) {
            Event::create([
                'name' =>$faker->name,
                'description' =>$faker->realText($maxNbChars = 200, $indexSize = 2),
                'banner'=>$faker->imageUrl($width = 640, $height = 480),
                'startDate' =>$faker->DateTime('2008-04-25 08:37:17', 'UTC'),
                'location' => $faker->Address,
                'latitude' => $faker->latitude($min = 7, $max = 8),
                'longitude'=> $faker->longitude($min = 38, $max = 39),
                'contact_phone' => $faker->e164PhoneNumber,
                'endDate' =>$faker->DateTime('2008-04-25 08:37:17', 'UTC'),
                'event_category_id' =>$faker ->numberBetween($min = 1, $max = $ecmax),
                'church_id' =>$faker -> numberBetween($min = 1, $max = $cmax)
            ]);
        }
         $this->command->info('Event added');
    }

   
}
