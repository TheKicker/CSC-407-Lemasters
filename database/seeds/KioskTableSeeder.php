<?php

use Illuminate\Database\Seeder;

class KioskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kiosks')->delete();

        Kiosk::create(array(
            'location' => 'Geneva College S&E',
            'address' => '3200 College Avenue, Beaver Falls PA 15010',
        ));

        Kiosk::create(array(
            'location' => 'Chippewa Walmart',
            'address' => '100 Chippewa Town Centre, Beaver Falls PA 15010',
        ));

        Kiosk::create(array(
            'location' => 'PPG Paints Arena',
            'address' => '1001 5th Avenue, Pittsburgh PA 15219',
        ));

        Kiosk::create(array(
            'location' => 'Long Branch Saloon',
            'address' => '574 Blockhouse Road, New Brighton PA 15066',
        ));

        Kiosk::create(array(
            'location' => 'Cafe Kolache',
            'address' => '402 3rd Street, Beaver PA 15009',
        ));

        Kiosk::create(array(
            'location' => 'Beaver Valley Mall',
            'address' => '570 Beaver Valley Mall Route 18, Monaca PA 15061',
        ));

        Kiosk::create(array(
            'location' => 'Cranberry Field & Stream',
            'address' => '1000 Cranberry Square Drive, Cranberry Township PA 16066',
        ));

    }
}
