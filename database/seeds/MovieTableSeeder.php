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
            'title' => 'Toy Story (1995)',
            'length' => 81,
            'description' => 'An American computer-animated buddy adventure comedy film -- Taking place in a world where anthropomorphic toys come to life when humans aren\'t present, its plot focuses on the relationship between an old-fashioned pullstring cowboy doll named Woody and an astronaut action figure Buzz Lightyear as they evolve from rivals competing for the affections of their owner Andy to friends who work together to be reunited with him after being separated from him.',
            'genreID' => 2,
            'cover' => 'Toy_Story.jpg',
            'isDISC' => rand(1,1),
            'isBLURAY' => rand(0,1),
        ));

        Movie::create(array(
            'title' => 'Shawshank Redemption (1994)',
            'length' => 142,
            'description' => 'An American drama film written and directed by Frank Darabont, based on the 1982 Stephen King novella Rita Hayworth and Shawshank Redemption. It tells the story of banker Andy Dufresne (Tim Robbins), who is sentenced to life in Shawshank State Penitentiary for the murder of his wife and her lover, despite his claims of innocence. Over the following two decades, he befriends a fellow prisoner, contraband smuggler Ellis "Red" Redding (Morgan Freeman), and becomes instrumental in a money laundering operation led by the prison warden Samuel Norton (Bob Gunton). William Sadler, Clancy Brown, Gil Bellows, and James Whitmore appear in supporting roles.',
            'genreID' => 6,
            'cover' => 'Shawshank_Redemption.jpg',
            'isDISC' => rand(1,1),
            'isBLURAY' => rand(0,1),
        ));

        Movie::create(array(
            'title' => 'Forrest Gump (1994)',
            'length' => 144,
            'description' => 'An American romantic comedy-drama film based on the 1986 novel of the same name by Winston Groom. It was directed by Robert Zemeckis and written by Eric Roth, and stars Tom Hanks, Robin Wright, Gary Sinise, Mykelti Williamson, and Sally Field. The story depicts several decades in the life of Forrest Gump (Hanks), a slow-witted but kind-hearted man from Alabama who witnesses several defining historical events in the 20th century in the United States.',
            'genreID' => 3,
            'cover' => 'Forrest_Gump.jpg',
            'isDISC' => rand(1,1),
            'isBLURAY' => rand(0,1),
        ));

        Movie::create(array(
            'title' => 'The Great Gatsby (2013)',
            'length' => 142,
            'description' => 'Inspired by the 1925 novel written by American author F. Scott Fitzgerald that follows a cast of characters living in the fictional towns of West Egg and East Egg on prosperous Long Island in the summer of 1922. The story primarily concerns the young and mysterious millionaire Jay Gatsby and his quixotic passion and obsession with the beautiful former debutante Daisy Buchanan.',
            'genreID' => 1,
            'cover' => 'The_Great_Gatsby.jpg',
            'isDISC' => rand(0,1),
            'isBLURAY' => rand(1,1),
        ));

        Movie::create(array(
            'title' => 'Tarzan (1999)',
            'length' => 88,
            'description' => 'An American animated adventure film produced by Walt Disney Feature Animation for Walt Disney Pictures. The story follows Tarzan\'s adventures, from his childhood being raised by apes in the jungle, to his eventual encounters with other humans and Western society.',
            'genreID' => 2,
            'cover' => 'Tarzan.jpg',
            'isDISC' => rand(1,1),
            'isBLURAY' => rand(0,1),
        ));

        Movie::create(array(
            'title' => 'IT (2017)',
            'length' => 135,
            'description' => 'The film is set in the summer of 1989 and tells the story of seven children in Derry, Maine, who are terrorized by the eponymous being, only to face their own personal demons in the process.',
            'genreID' => 4,
            'cover' => 'IT.jpg',
            'isDISC' => rand(0,1),
            'isBLURAY' => rand(1,1),
        ));

        Movie::create(array(
            'title' => 'Deadpool (2016)',
            'length' => 108,
            'description' => 'An American superhero film based on the Marvel Comics character of the same name, distributed by 20th Century Fox. It is the eighth installment of the X-Men film series, and the first standalone Deadpool film. In the film, Wade Wilson hunts down the man who gave him mutant abilities, but also a scarred physical appearance, as the antihero Deadpool.',
            'genreID' => 5,
            'cover' => 'Deadpool.png',
            'isDISC' => rand(0,1),
            'isBLURAY' => rand(1,1),
        ));

        Movie::create(array(
            'title' => 'October Baby (2011)',
            'length' => 107,
            'description' => 'American Christian-themed drama film directed by Andrew Erwin and Jon Erwin and starring Rachel Hendrix in her film debut. It is the story of a woman named Hannah, who learns as a young adult that she survived a failed abortion attempt. She then embarks upon a road trip to understand the circumstances of her birth.',
            'genreID' => 6,
            'cover' => 'October_Baby.jpg',
            'isDISC' => rand(0,1),
            'isBLURAY' => rand(1,1),
        ));

    }
}
