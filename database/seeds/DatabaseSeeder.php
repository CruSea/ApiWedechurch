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
    	$this->call(RoleTableSeeder::class);
    	$this->call(DenominationTableSeeder::class);
    	$this->call(Event_categoryTableSeeder::class);
    	$this->call(Schedule_categoryTableSeeder::class);
    	$this->call(ChurchesTableSeeder::class);
    	$this->call(EventsTableSeeder::class);
    	$this->call(SchedulesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(Favorite_churchSeeder::class);
         $this->call(Favorite_eventSeeder::class);
       
    }
}

