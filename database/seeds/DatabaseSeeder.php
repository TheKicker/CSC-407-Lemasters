<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(MovieTableSeeder::class);
        $this->call(KioskTableSeeder::class);
        $this->call(InventoryTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(GenreTableSeeder::class);

    }
}
