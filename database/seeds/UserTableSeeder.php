<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();

        User::create([
            'firstName' => str_random(10),
            'middleName' => str_random(10),
            'lastName' => str_random(10),
            'email' => str_random(10) . '@gmail.com',
            'cellNumber' => str_random(10),
            'password' => bcrypt('asdfasdf'),
            'street' => str_random(10),
            'city' => str_random(10),
            'state' => str_random(5),
            'zip' => str_random(10)
        ]);

        User::create([
            'firstName' => str_random(10),
            'middleName' => str_random(10),
            'lastName' => str_random(10),
            'email' => str_random(10) . '@gmail.com',
            'cellNumber' => str_random(10),
            'password' => bcrypt('asdfasdf'),
            'street' => str_random(10),
            'city' => str_random(10),
            'state' => str_random(5),
            'zip' => str_random(10)
        ]);


    }
}
