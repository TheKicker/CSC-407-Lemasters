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
            'userID' => '2',
            'movieID' => '1',
            'kioskID' => '1',
            'review' => 'My childhood favorite... no better movie exists.  To infinity and beyond!',
        ));

        Reviews::create(array(
            'userID' => '2',
            'movieID' => '4',
            'kioskID' => '2',
            'review' => 'The Great Gatsby is such a great movie, I want to attend one of Gatsbys parties!!',
        ));

        Reviews::create(array(
            'userID' => '3',
            'movieID' => '8',
            'kioskID' => '3',
            'review' => 'I love October Baby, every time I need to cry, I watch it... 10/10',
        ));

        Reviews::create(array(
            'userID' => '3',
            'movieID' => '9',
            'kioskID' => '4',
            'review' => 'I recently bought a pistol for Black Friday --  so I assume that The Hunger Games is something I could easily win!',
        ));

        Reviews::create(array(
            'userID' => '4',
            'movieID' => '6',
            'kioskID' => '5',
            'review' => 'By far the best clown movie I have EVER seen. 9/10 thriller to the end!',
        ));

        Reviews::create(array(
            'userID' => '5',
            'movieID' => '11',
            'kioskID' => '6',
            'review' => 'I am going to make you an offer you cannot refuse... WATCH THIS MOVIE',
        ));

        Reviews::create(array(
            'userID' => '6',
            'movieID' => '7',
            'kioskID' => '7',
            'review' => 'Eh, it was okay.  Some hilarious parts, some boring parts.',
        ));

        Reviews::create(array(
            'userID' => '7',
            'movieID' => '2',
            'kioskID' => '8',
            'review' => 'Tremendous story, I love Morgan Freeman and his voice!',
        ));

        Reviews::create(array(
            'userID' => '8',
            'movieID' => '5',
            'kioskID' => '9',
            'review' => '[INSERT TARZAN YELL]',
        ));

        Reviews::create(array(
            'userID' => '9',
            'movieID' => '12',
            'kioskID' => '10',
            'review' => 'Stupid is as stupid does, and stupid would choose another movie over this!',
        ));

        Reviews::create(array(
            'userID' => '10',
            'movieID' => '3',
            'kioskID' => '10',
            'review' => 'Me encantó esta película.  Es fenomenal y me hace querer ver más películas americanas.',
        ));
    }
}
