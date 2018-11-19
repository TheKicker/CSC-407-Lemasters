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
            'cellNumber' => '935-692-8258',
            'password' => bcrypt('Admin2018'),
            'street' => '3200 College Ave' ,
            'city' => 'Beaver Falls',
            'state' => 'Pennsylvania',
            'zip' => '15010'
        ]);

        User::create([
            'firstName' => 'Cav',
            'middleName' => 'Lee',
            'lastName' => 'LeMasters',
            'email' => 'Cav.Lemasters@geneva.edu',
            'cellNumber' => '234-736-6808',
            'password' => bcrypt('Penguins2017'),
            'street' => '1000 Township Hwy' ,
            'city' => 'Wellsville',
            'state' => 'Ohio',
            'zip' => '43968'
        ]);

        User::create([
            'firstName' => 'Haylee',
            'middleName' => 'Nicole',
            'lastName' => 'Heaton',
            'email' => 'Haylee.Heaton@geneva.edu',
            'cellNumber' => '814-330-9180',
            'password' => bcrypt('Geneva2019'),
            'street' => '215 Juniata Valley Rd' ,
            'city' => 'Hollidaysburg',
            'state' => 'Pennsylvania',
            'zip' => '16648'
        ]);

        User::create([
            'firstName' => 'Spencer',
            'middleName' => 'Trash',
            'lastName' => 'York',
            'email' => 'Spencer.York@geneva.edu',
            'cellNumber' => '724-630-6672',
            'password' => bcrypt('Password123'),
            'street' => '3200 College Ave' ,
            'city' => 'Geneva College',
            'state' => 'Pennsylvania',
            'zip' => '15010'
        ]);

        User::create([
            'firstName' => 'Donald',
            'middleName' => 'J.',
            'lastName' => 'Trump',
            'email' => 'TrumpDaddy@whitehouse.com',
            'cellNumber' => '202-456-1111',
            'password' => bcrypt('HillarySucks'),
            'street' => '1600 Pennsylvania Avenue, NW' ,
            'city' => 'Washington',
            'state' => 'District of Columbia',
            'zip' => '20500'
        ]);

        User::create([
            'firstName' => 'Sydney',
            'middleName' => 'Patric',
            'lastName' => 'Crosby',
            'email' => 'SydTheKid@penguins.com',
            'cellNumber' => '100-100-08787',
            'password' => bcrypt('LetsGoPens'),
            'street' => '5th Avenue' ,
            'city' => 'Pittsburgh',
            'state' => 'Pennsylvania',
            'zip' => '15219'
        ]);

        User::create([
            'firstName' => 'Aubrey',
            'middleName' => 'Drake',
            'lastName' => 'Graham',
            'email' => 'Drake@GodsPlan.com',
            'cellNumber' => '100-867-5309',
            'password' => bcrypt('Scorpion2018'),
            'street' => '5th Avenue' ,
            'city' => 'Hidden Hills',
            'state' => 'California',
            'zip' => '91302'
        ]);

        User::create([
            'firstName' => 'Aurelius',
            'middleName' => 'Augustine',
            'lastName' => 'Hipponensis',
            'email' => 'Confessions@GodsPlan.com',
            'cellNumber' => '000-000-0000',
            'password' => bcrypt('CityOfGod'),
            'street' => '1st Avenue' ,
            'city' => 'Thagaste',
            'state' => 'Algeria',
            'zip' => '15010'
        ]);

        User::create([
            'firstName' => 'Gaius',
            'middleName' => 'Julius',
            'lastName' => 'Caesar',
            'email' => 'Caesar@HolyRomanEmpire.com',
            'cellNumber' => '100-200-3000',
            'password' => bcrypt('HelpIveBeenStabbed'),
            'street' => 'Emperors Village',
            'city' => 'Rome',
            'state' => 'The Holy Roman Empire',
            'zip' => '1'
        ]);

        User::create([
            'firstName' => 'Ryad',
            'middleName' => 'Ramírez',
            'lastName' => 'Al-Hassar',
            'email' => 'Jackal@Rainbow.com',
            'cellNumber' => '103-201-3002',
            'password' => bcrypt('LemmeGetThisAce'),
            'street' => '1 Jackal Drive',
            'city' => 'Ceuta',
            'state' => 'Spain',
            'zip' => '12345'
        ]);
    }
}
