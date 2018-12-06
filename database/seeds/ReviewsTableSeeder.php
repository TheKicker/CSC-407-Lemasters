<?php

use Illuminate\Database\Seeder;
use App\Reviews;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('reviews')->delete();

        Reviews::create(array(
            'userID' => '1',
            'movieID' => '4',
            'kioskID' => '4',
            'review' => 'The Great Gatsby is such a great movie, I want to attend one of Gatsbys parties!!',
        ));
    }
}
