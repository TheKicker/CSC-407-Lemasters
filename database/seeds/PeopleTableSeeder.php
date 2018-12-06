<?php

use Illuminate\Database\Seeder;
use App\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('people')->delete();

        Person::create(array(
            'firstName' => 'Cav',
            'middleName' => 'L',
            'lastName' => 'LeMasters',
            'email' => 'Cav.Lemasters@geneva.edu',
            'cellNumber' => '234-736-6808',
            'password' => bcrypt('Penguins2017'),
            'street' => '1000 Township Hwy' ,
            'city' => 'Wellsville',
            'state' => 'Ohio',
            'zip' => '43968'
        ));

        Person::create(array(
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
        ));

        Person::create(array(
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
        ));

        Person::create(array(
            'firstName' => 'Donald',
            'middleName' => 'J.',
            'lastName' => 'Trump',
            'email' => 'TrumpDaddy@WhiteHouse.com',
            'cellNumber' => '202-456-1111',
            'password' => bcrypt('HillarySucks'),
            'street' => '1600 Pennsylvania Avenue, NW' ,
            'city' => 'Washington',
            'state' => 'District of Columbia',
            'zip' => '20500'
        ));

        Person::create(array(
            'firstName' => 'Sydney',
            'middleName' => 'Patric',
            'lastName' => 'Crosby',
            'email' => 'SydTheKid@Penguins.com',
            'cellNumber' => '100-100-8787',
            'password' => bcrypt('LetsGoPens'),
            'street' => '5th Avenue' ,
            'city' => 'Pittsburgh',
            'state' => 'Pennsylvania',
            'zip' => '15219'
        ));

        Person::create(array(
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
        ));

        Person::create(array(
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
        ));

        Person::create(array(
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
        ));

        Person::create(array(
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
        ));

        Person::create(array(
            'firstName' => 'Michael',
            'middleName' => 'Gary',
            'lastName' => 'Scott',
            'email' => 'M.Scott@DunderMifflin.com',
            'cellNumber' => '123-234-5678',
            'password' => bcrypt('Password1234'),
            'street' => '1 Dunder Mifflin Drive',
            'city' => 'Scranton',
            'state' => 'Pennsylvania',
            'zip' => '18504'
        ));
    }
}
