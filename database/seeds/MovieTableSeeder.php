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
            'title' => 'Forrest Gump (1994)',
            'length' => 144,
            'description' => 'An American romantic comedy-drama film based on the 1986 novel of the same name by Winston Groom. It was directed by Robert Zemeckis and written by Eric Roth, and stars Tom Hanks, Robin Wright, Gary Sinise, Mykelti Williamson, and Sally Field. The story depicts several decades in the life of Forrest Gump (Hanks), a slow-witted but kind-hearted man from Alabama who witnesses several defining historical events in the 20th century in the United States.',
            'genreID' => 3,
            'isDISC' => rand(1,1),
            'isBLURAY' => rand(0,1),
        ));

        Movie::create(array(
            'title' => 'The Great Gatsby (2013)',
            'length' => 142,
            'description' => 'Inspired by the 1925 novel written by American author F. Scott Fitzgerald that follows a cast of characters living in the fictional towns of West Egg and East Egg on prosperous Long Island in the summer of 1922. The story primarily concerns the young and mysterious millionaire Jay Gatsby and his quixotic passion and obsession with the beautiful former debutante Daisy Buchanan.',
            'genreID' => 1,
            'isDISC' => rand(0,1),
            'isBLURAY' => rand(1,1),
        ));

        Movie::create(array(
            'title' => 'IT (2017)',
            'length' => 135,
            'description' => 'The film is set in the summer of 1989 and tells the story of seven children in Derry, Maine, who are terrorized by the eponymous being, only to face their own personal demons in the process.',
            'genreID' => 4,
            'isDISC' => rand(0,1),
            'isBLURAY' => rand(1,1),
        ));

        Movie::create(array(
            'title' => 'Deadpool (2016)',
            'length' => 108,
            'description' => 'An American superhero film based on the Marvel Comics character of the same name, distributed by 20th Century Fox. It is the eighth installment of the X-Men film series, and the first standalone Deadpool film. In the film, Wade Wilson hunts down the man who gave him mutant abilities, but also a scarred physical appearance, as the antihero Deadpool.',
            'genreID' => 5,
            'isDISC' => rand(0,1),
            'isBLURAY' => rand(1,1),
        ));

        Movie::create(array(
            'title' => 'October Baby (2011)',
            'length' => 107,
            'description' => 'American Christian-themed drama film directed by Andrew Erwin and Jon Erwin and starring Rachel Hendrix in her film debut. It is the story of a woman named Hannah, who learns as a young adult that she survived a failed abortion attempt. She then embarks upon a road trip to understand the circumstances of her birth.',
            'genreID' => 6,
            'isDISC' => rand(0,1),
            'isBLURAY' => rand(1,1),
        ));

    }
}
