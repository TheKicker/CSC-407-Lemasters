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
            'firstName' => 'Admin',
            'middleName' => 'Of',
            'lastName' => 'YellowBucket',
            'email' => 'admin@geneva.edu',
            'cellNumber' => '9356928258',
            'password' => bcrypt('Admin2018'),
            'street' => '3200 College Ave' ,
            'city' => 'Beaver Falls',
            'state' => 'PA',
            'zip' => '15010'
        ]);

        User::create([
            'firstName' => 'Cav',
            'middleName' => 'Lee',
            'lastName' => 'LeMasters',
            'email' => 'cav.lemasters@geneva.edu',
            'cellNumber' => '2347366808',
            'password' => bcrypt('Penguins2017'),
            'street' => '17684 Township 1 Rd' ,
            'city' => 'Wellsville',
            'state' => 'OH',
            'zip' => '43968'
        ]);

        User::create([
            'firstName' => 'Haylee',
            'middleName' => 'Nicole',
            'lastName' => 'Heaton',
            'email' => 'Haylee.Heaton@geneva.edu',
            'cellNumber' => '8143309180',
            'password' => bcrypt('Geneva2019'),
            'street' => '215 Juniata Valley Rd' ,
            'city' => 'Hollidaysburg',
            'state' => 'PA',
            'zip' => '16648'
        ]);

        User::create([
            'firstName' => 'Spencer',
            'middleName' => 'Trash',
            'lastName' => 'York',
            'email' => 'Spencer.York@geneva.edu',
            'cellNumber' => '7246306672',
            'password' => bcrypt('Password123'),
            'street' => '3200 College Ave' ,
            'city' => 'Geneva College',
            'state' => 'PA',
            'zip' => '15010'
        ]);


    }
}
