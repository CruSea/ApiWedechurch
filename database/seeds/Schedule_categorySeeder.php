<?php

use Illuminate\Database\Seeder;
use App\Schedule_category;

class Schedule_categorySeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
      App\Schedule_category::truncate();
       $faker = \Faker\Factory::create();
       for ($i = 0; $i < 10; $i++) {
            Schedule_category::create([
                'name' => $faker->name
            ]);
        }
      $this->command->info('Schedule_category added');
     }
}
