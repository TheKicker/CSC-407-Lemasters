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
            'dvdInventory' => 55,
            'blurayInventory' => 55,
        ));

        Inventory::create(array(
            'movieID' => 2,
            'dvdInventory' => 55,
            'blurayInventory' => 55,
        ));

        Inventory::create(array(
            'movieID' => 3,
            'dvdInventory' => 55,
            'blurayInventory' => 55,
        ));

        Inventory::create(array(
            'movieID' => 4,
            'dvdInventory' => 55,
            'blurayInventory' => 55,
        ));

        Inventory::create(array(
            'movieID' => 5,
            'dvdInventory' => 55,
            'blurayInventory' => 55,
        ));

        Inventory::create(array(
            'movieID' => 6,
            'dvdInventory' => 55,
            'blurayInventory' => 55,
        ));

        Inventory::create(array(
            'movieID' => 7,
            'dvdInventory' => 55,
            'blurayInventory' => 55,
        ));

        Inventory::create(array(
            'movieID' => 8,
            'dvdInventory' => 55,
            'blurayInventory' => 55,
        ));

        Inventory::create(array(
            'movieID' => 9,
            'dvdInventory' => 55,
            'blurayInventory' => 55,
        ));

        Inventory::create(array(
            'movieID' => 10,
            'dvdInventory' => 55,
            'blurayInventory' => 55,
        ));

        Inventory::create(array(
            'movieID' => 11,
            'dvdInventory' => 55,
            'blurayInventory' => 55,
        ));

        Inventory::create(array(
            'movieID' => 12,
            'dvdInventory' => 55,
            'blurayInventory' => 55,
        ));

        Inventory::create(array(
            'movieID' => 13,
            'dvdInventory' => 55,
            'blurayInventory' => 55,
        ));

        Inventory::create(array(
            'movieID' => 14,
            'dvdInventory' => 55,
            'blurayInventory' => 55,
        ));

        Inventory::create(array(
            'movieID' => 15,
            'dvdInventory' => 55,
            'blurayInventory' => 55,
        ));
    }
}
