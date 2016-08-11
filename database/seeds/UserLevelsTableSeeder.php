<?php

use Illuminate\Database\Seeder;

class UserLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\UserLevel::create([
        	'name' => 'owner',
        	'label' => 'Shop Owner',
        ]);

        App\UserLevel::create([
        	'name' => 'customer',
        	'label' => 'Customer',
        ]);
    }
}
