<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DenominationSeeder::class);
        $this->call(ChurchSeeder::class);
        $this->call(Event_categorySeeder::class);
        $this->call(EventSeeder::class);
        $this->call(Schedule_categorySeeder::class);
        $this->call(ScheduleSeeder::class);
        $this->call(userSeeder::class);
    }
}
