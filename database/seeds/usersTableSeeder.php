<?php

use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\user::create([
        	'Full_name' => 'Minhajul Islam',
        	'user_id' => 'A34048',
        	'password' => '123456',
        	'type' => 'admin'

        ]);

        \App\user::create([
            'Full_name' => 'Tahmid Mahtab',
            'user_id' => 'S33980',
            'password' => '123123',
            'type' => 'student'

        ]);
        \App\user::create([
            'Full_name' => 'Habibul Amin',
            'user_id' => 'T34044',
            'password' => '111222',
            'type' => 'teacher'

        ]);
    }
}
