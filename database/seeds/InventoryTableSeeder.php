<?php

use Illuminate\Database\Seeder;
use App\Inventory;

class InventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('disc_inventory')->delete();

        Inventory::create(array(
            'movieID' => 1,
            'dvdInventory' => 27,
            'blurayInventory' => 10,
        ));

        Inventory::create(array(
            'movieID' => 2,
            'dvdInventory' => 17,
            'blurayInventory' => 8,
        ));

        Inventory::create(array(
            'movieID' => 3,
            'dvdInventory' => 11,
            'blurayInventory' => 16,
        ));

        Inventory::create(array(
            'movieID' => 4,
            'dvdInventory' => 15,
            'blurayInventory' => 19,
        ));

        Inventory::create(array(
            'movieID' => 5,
            'dvdInventory' => 20,
            'blurayInventory' => 10,
        ));

        Inventory::create(array(
            'movieID' => 6,
            'dvdInventory' => 6,
            'blurayInventory' => 7,
        ));

        Inventory::create(array(
            'movieID' => 7,
            'dvdInventory' => 19,
            'blurayInventory' => 21,
        ));
    }
}
