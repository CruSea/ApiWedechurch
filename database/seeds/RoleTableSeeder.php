<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
      Role::truncate();
      
         Role ::create([
                'name' => 'gust']);
         Role ::create([
                'name' => 'Admin']);
         Role ::create([
                'name' => 'SuperAdmin']);
       $this-> command->info('Role added');
    }
}
