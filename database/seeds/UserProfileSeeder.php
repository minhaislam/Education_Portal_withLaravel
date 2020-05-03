<?php

use Illuminate\Database\Seeder;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User_Profile::create([
        	
        	'user_id' => 1,
        	'email' => 'user_email@gmail.com',
        	'phone' => '01234567',
        	'address'=>'houseno'

        ]);
         \App\User_Profile::create([
        	
        	'user_id' => 2,
        	'email' => 'user_email@gmail.com',
        	'phone' => '01234567',
        	'address'=>'houseno'

        ]);
          \App\User_Profile::create([
        	
        	'user_id' => 3,
        	'email' => 'user_email@gmail.com',
        	'phone' => '01234567',
        	'address'=>'houseno'

        ]);
    }
}
