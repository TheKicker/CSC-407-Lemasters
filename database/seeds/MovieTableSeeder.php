<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies') -> delete();

        Movie::create(array(
            'title' => str_random(10),
            'length' => 121,
            'description' => str_random(16),
            'genreID' => 2,
            'isDISC' => rand(0,1),
            'isBLURAY' => rand(0,1),
        ));

        Movie::create(array(
            'title' => str_random(10),
            'length' => 96,
            'description' => str_random(16),
            'genreID' => 1,
            'isDISC' => rand(0,1),
            'isBLURAY' => rand(0,1),
        ));
    }
}
