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
            'coverPhoto' => 'images/movie_1.jpg',
            'isDISC' => rand(1,1),
            'isBLURAY' => rand(0,1),
        ));

        Movie::create(array(
            'title' => 'Shawshank Redemption (1994)',
            'length' => 142,
            'description' => 'An American drama film written and directed by Frank Darabont, based on the 1982 Stephen King novella Rita Hayworth and Shawshank Redemption. It tells the story of banker Andy Dufresne (Tim Robbins), who is sentenced to life in Shawshank State Penitentiary for the murder of his wife and her lover, despite his claims of innocence. Over the following two decades, he befriends a fellow prisoner, contraband smuggler Ellis "Red" Redding (Morgan Freeman), and becomes instrumental in a money laundering operation led by the prison warden Samuel Norton (Bob Gunton). William Sadler, Clancy Brown, Gil Bellows, and James Whitmore appear in supporting roles.',
            'genreID' => 6,
            'coverPhoto' => 'images/movie_2.jpg',
            'isDISC' => rand(1,1),
            'isBLURAY' => rand(0,1),
        ));

        Movie::create(array(
            'title' => 'Forrest Gump (1994)',
            'length' => 144,
            'description' => 'An American romantic comedy-drama film based on the 1986 novel of the same name by Winston Groom. It was directed by Robert Zemeckis and written by Eric Roth, and stars Tom Hanks, Robin Wright, Gary Sinise, Mykelti Williamson, and Sally Field. The story depicts several decades in the life of Forrest Gump (Hanks), a slow-witted but kind-hearted man from Alabama who witnesses several defining historical events in the 20th century in the United States.',
            'genreID' => 3,
            'coverPhoto' => 'images/movie_3.jpg',
            'isDISC' => rand(1,1),
            'isBLURAY' => rand(0,1),
        ));

        Movie::create(array(
            'title' => 'The Great Gatsby (2013)',
            'length' => 142,
            'description' => 'Inspired by the 1925 novel written by American author F. Scott Fitzgerald that follows a cast of characters living in the fictional towns of West Egg and East Egg on prosperous Long Island in the summer of 1922. The story primarily concerns the young and mysterious millionaire Jay Gatsby and his quixotic passion and obsession with the beautiful former debutante Daisy Buchanan.',
            'genreID' => 1,
            'coverPhoto' => 'images/movie_4.jpg',
            'isDISC' => rand(0,1),
            'isBLURAY' => rand(1,1),
        ));

        Movie::create(array(
            'title' => 'Tarzan (1999)',
            'length' => 88,
            'description' => 'An American animated adventure film produced by Walt Disney Feature Animation for Walt Disney Pictures. The story follows Tarzan\'s adventures, from his childhood being raised by apes in the jungle, to his eventual encounters with other humans and Western society.',
            'genreID' => 2,
            'coverPhoto' => 'images/movie_5.jpg',
            'isDISC' => rand(1,1),
            'isBLURAY' => rand(0,1),
        ));

        Movie::create(array(
            'title' => 'IT (2017)',
            'length' => 135,
            'description' => 'The film is set in the summer of 1989 and tells the story of seven children in Derry, Maine, who are terrorized by the eponymous being, only to face their own personal demons in the process.',
            'genreID' => 4,
            'coverPhoto' => 'images/movie_6.jpg',
            'isDISC' => rand(0,1),
            'isBLURAY' => rand(1,1),
        ));

        Movie::create(array(
            'title' => 'Deadpool (2016)',
            'length' => 108,
            'description' => 'An American superhero film based on the Marvel Comics character of the same name, distributed by 20th Century Fox. It is the eighth installment of the X-Men film series, and the first standalone Deadpool film. In the film, Wade Wilson hunts down the man who gave him mutant abilities, but also a scarred physical appearance, as the antihero Deadpool.',
            'genreID' => 5,
            'coverPhoto' => 'images/movie_7.jpg',
            'isDISC' => rand(0,1),
            'isBLURAY' => rand(1,1),
        ));

        Movie::create(array(
            'title' => 'October Baby (2011)',
            'length' => 107,
            'description' => 'American Christian-themed drama film directed by Andrew Erwin and Jon Erwin and starring Rachel Hendrix in her film debut. It is the story of a woman named Hannah, who learns as a young adult that she survived a failed abortion attempt. She then embarks upon a road trip to understand the circumstances of her birth.',
            'genreID' => 6,
            'coverPhoto' => 'images/movie_8.jpg',
            'isDISC' => rand(0,1),
            'isBLURAY' => rand(0,1),
        ));

        Movie::create(array(
            'title' => 'Hunger Games (2012)',
            'length' => 142,
            'description' => ' A science fiction-adventure film directed by Gary Ross and based on Suzanne Collins’ 2008 novel of the same name. It is from the perspective of the voice of 16-year-old Katniss Everdeen, who lives in the future, post-apocalyptic nation of Panem in North America. The Capitol, a highly advanced metropolis, exercises political control over the rest of the nation. The Hunger Games is an annual event in which one boy and one girl aged 12–18 from each of the twelve districts surrounding the Capitol are selected by lottery to compete in a televised battle to the death.',
            'genreID' => 8,
            'coverPhoto' => 'images/movie_9.jpg',
            'isDISC' => rand(1,1),
            'isBLURAY' => rand(1,1),
        ));

        Movie::create(array(
            'title' => 'Harry Potter & Sorcerers Stone (2001)',
            'length' => 152,
            'description' => 'An orphaned boy enrolls in a school of wizardry, where he learns the truth about himself, his family and the terrible evil that haunts the magical world. Harry is snatched away from his mundane existence by Rubeus Hagrid, the grounds keeper for Hogwarts, and quickly thrown into a world completely foreign to both him and the viewer. Famous for an incident that happened at his birth, Harry makes friends easily at his new school. He soon finds, however, that the wizarding world is far more dangerous for him than he would have imagined, and he quickly learns that not all wizards are ones to be trusted.',
            'genreID' => 6,
            'coverPhoto' => 'images/movie_10.jpg',
            'isDISC' => rand(1,1),
            'isBLURAY' => rand(1,1),
        ));

        Movie::create(array(
            'title' => 'The Godfather (1972)',
            'length' => 177,
            'description' => 'Starring Marlon Brando and Al Pacino as the leaders of a fictional New York crime family -- the story spanning 1945 to 1955, chronicles the family under the patriarch Vito Corleone (Brando), focusing on the transformation of Michael Corleone (Pacino) from reluctant family outsider to ruthless mafia boss.',
            'genreID' => 4,
            'coverPhoto' => 'images/movie_11.jpg',
            'isDISC' => rand(1,1),
            'isBLURAY' => rand(1,1),
        ));

    }
}
