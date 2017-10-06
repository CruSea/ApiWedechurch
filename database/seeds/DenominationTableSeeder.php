<?php

use Illuminate\Database\Seeder;
use App\Denomination;

class DenominationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Denomination::truncate();
       $faker = \Faker\Factory::create();

       for ($i = 0; $i < 10; $i++) {
            Denomination::create([
                'name' => $faker->company,
                'description' => $faker->text,
                'logo'=>$faker->imageUrl($width = 640, $height = 480),
            ]);
       
        }
        $this->command->info('Denomination added');
    }

}
