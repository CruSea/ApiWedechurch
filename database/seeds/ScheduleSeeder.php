<?php

use Illuminate\Database\Seeder;
use App\Schedule;
use App\Church;
use App\Schedule_category;

class ScheduleSeeder extends Seeder
{
        public function run()
    {
      Schedule::truncate();
      $scmax = Schedule_category::count();
       $cmax = Church::count();
       $faker = \Faker\Factory::create();
       for ($i = 0; $i < 10; $i++) {
            Schedule::create([
                'name' =>$faker->name,
                'redundancy' =>$faker->sentence,
                'startDate' =>$faker->DateTime('2008-04-25 08:37:17', 'UTC'),
                'endDate' =>$faker->DateTime('2008-04-25 08:37:17', 'UTC'),
                'category_id' =>$faker ->numberBetween($min = 1, $max =$scmax),
                'church_id' =>$faker ->numberBetween($min = 1, $max = $cmax)
            ]);
        }
   $this->command->info('Schedule added');
    }
}
