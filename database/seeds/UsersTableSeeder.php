<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = App\User::create([
        	'name' => 'Shopowner John',
        	'email' => 'shopowner@example.com',
        	'password' => bcrypt('placid'),
        ]);

        $owner->user_levels()->attach(App\UserLevel::where('name', 'owner')->first()->id);

        $cust1 = App\User::create([
        	'name' => 'Customer One',
        	'email' => 'cust1@example.com',
        	'password' => bcrypt('placid'),
        ]);

        $cust1->user_levels()->attach(App\UserLevel::where('name', 'customer')->first()->id);

        $cust2 = App\User::create([
        	'name' => 'Customer Two',
        	'email' => 'cust2@example.com',
        	'password' => bcrypt('placid'),
        ]);

        $cust2->user_levels()->attach(App\UserLevel::where('name', 'customer')->first()->id);
    }
}
