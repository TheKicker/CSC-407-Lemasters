<?php

use Illuminate\Database\Seeder;
use App\Kiosk;

class KioskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table('kiosks') -> delete();

        Kiosk::create(array(
            'location' => 'Geneva College S&E',
            'address' => '3200 College Avenue, Beaver Falls PA 15010',

        ));

        Kiosk::create(array(
            'location' => 'Chippewa Walmart',
            'address' => '100 Chippewa Town Centre, Beaver Falls PA 15010',

        ));
    }
}