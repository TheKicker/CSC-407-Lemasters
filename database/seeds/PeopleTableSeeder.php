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
            'firstName' => 'Haylee',
            'middleName' => 'Nicole',
            'lastName' => 'Heaton',
            'email' => 'Haylee.Heaton@geneva.edu',
            'cellNumber' => '8143309180',
            'password' => bcrypt('Geneva2019'),
            'street' => '215 Juniata Valley Rd' ,
            'city' => 'Hollidaysburg',
            'state' => 'Pennsylvania',
            'zip' => '16648'
        ));
    }
}
