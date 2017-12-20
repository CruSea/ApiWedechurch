<?php

use Illuminate\Database\Seeder;
use App\Event_category;
class Event_categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Event_category::truncate();
       $faker = \Faker\Factory::create();
       for ($i = 0; $i < 10; $i++) {
            Event_category::create([
                'name' => $faker->name
            ]);
      }
      $this->command->info('Event_category added'); 
    }

}
