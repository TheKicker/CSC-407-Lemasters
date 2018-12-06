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
            'dvdInventory' => 18,
            'blurayInventory' => 25,
        ));

        Inventory::create(array(
            'movieID' => 2,
            'dvdInventory' => 23,
            'blurayInventory' => 11,
        ));

        Inventory::create(array(
            'movieID' => 3,
            'dvdInventory' => 17,
            'blurayInventory' => 21,
        ));

        Inventory::create(array(
            'movieID' => 4,
            'dvdInventory' => 12,
            'blurayInventory' => 26,
        ));

        Inventory::create(array(
            'movieID' => 5,
            'dvdInventory' => 14,
            'blurayInventory' => 15,
        ));

        Inventory::create(array(
            'movieID' => 6,
            'dvdInventory' => 16,
            'blurayInventory' => 26,
        ));

        Inventory::create(array(
            'movieID' => 7,
            'dvdInventory' => 21,
            'blurayInventory' => 15,
        ));

        Inventory::create(array(
            'movieID' => 8,
            'dvdInventory' => 14,
            'blurayInventory' => 24,
        ));

        Inventory::create(array(
            'movieID' => 9,
            'dvdInventory' => 15,
            'blurayInventory' => 15,
        ));

        Inventory::create(array(
            'movieID' => 10,
            'dvdInventory' => 19,
            'blurayInventory' => 22,
        ));

        Inventory::create(array(
            'movieID' => 11,
            'dvdInventory' => 23,
            'blurayInventory' => 25,
        ));

        Inventory::create(array(
            'movieID' => 12,
            'dvdInventory' => 30,
            'blurayInventory' => 30,
        ));

        Inventory::create(array(
            'movieID' => 13,
            'dvdInventory' => 9,
            'blurayInventory' => 14,
        ));

        Inventory::create(array(
            'movieID' => 14,
            'dvdInventory' => 10,
            'blurayInventory' => 11,
        ));

        Inventory::create(array(
            'movieID' => 15,
            'dvdInventory' => 35,
            'blurayInventory' => 24,
        ));

        Inventory::create(array(
            'movieID' => 16,
            'dvdInventory' => 23,
            'blurayInventory' => 19,
        ));

        Inventory::create(array(
            'movieID' => 17,
            'dvdInventory' => 13,
            'blurayInventory' => 17,
        ));

        Inventory::create(array(
            'movieID' => 18,
            'dvdInventory' => 22,
            'blurayInventory' => 23,
        ));
    }
}
