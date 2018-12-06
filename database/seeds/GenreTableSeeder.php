<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('genre')->delete();

        Genre::create(array(
            'name' => 'Action',
            'description' => 'An action story is similar to adventure, and the protagonist usually takes a risky turn, which leads to desperate situations (including explosions, fight scenes, daring escapes, etc.). Action and Adventure are usually categorized together (sometimes even as "action-adventure") because they have much in common, and many stories fall under both genres simultaneously (for instance, the James Bond series can be classified as both).',
        ));

        Genre::create(array(
            'name' => 'Adventure',
            'description' => 'An adventure story is about a protagonist who journeys to epic or distant places to accomplish something. It can have many other genre elements included within it, because it is a very open genre. The protagonist has a mission and faces obstacles to get to their destination. Also, adventure stories usually include unknown settings and characters with prized properties or features.',
        ));

        Genre::create(array(
            'name' => 'Comedy',
            'description' => 'Comedy is a story that tells about a series of funny, or comical events, intended to make the audience laugh. It is a very open genre, and thus crosses over with many other genres on a frequent basis.',
        ));

        Genre::create(array(
            'name' => 'Crime',
            'description' => 'A crime story is about a crime that is being committed or was committed. It can also be an account of a criminal\'s life. It often falls into the action or adventure genres.',
        ));

        Genre::create(array(
            'name' => 'Drama',
            'description' => 'Within film, television and radio (but not theatre), drama is a genre of narrative fiction (or semi-fiction) intended to be more serious than humorous in tone,[2] focusing on in-depth development of realistic characters who must deal with realistic emotional struggles. A drama is commonly considered the opposite of a comedy, but may also be considered separate from other works of some broad genre, such as a fantasy.',
        ));

        Genre::create(array(
            'name' => 'Fantasy',
            'description' => 'A fantasy story is about magic or supernatural forces, rather than technology (as science fiction) if it happens to take place in a modern or future era. Depending on the extent of these other elements, the story may or may not be considered to be a "hybrid genre" series; for instance, even though the Harry Potter series canon includes the requirement of a particular gene to be a wizard, it is referred to only as a fantasy series.',
        ));

        Genre::create(array(
            'name' => 'Historical',
            'description' => 'A story about a real person or event. Often, they are written in a text book format, which may or may not focus on solely that.',
        ));

        Genre::create(array(
            'name' => 'Horror',
            'description' => 'A horror story is told to deliberately scare or frighten the audience, through suspense, violence or shock.',
        ));

        Genre::create(array(
            'name' => 'Mystery',
            'description' => 'A mystery story follows an investigator as he/she attempts to solve a puzzle (often a crime). The details and clues are presented as the story continues and the protagonist discovers them and by the end of the story the mystery/puzzle is solved. For example, in the case of a crime mystery the perpetrator and motive behind the crime are revealed and the perpetrator is brought to justice. Mystery novels are often written in series, which facilitates a more in-depth development of the primary investigator.',
        ));

        Genre::create(array(
            'name' => 'Philosophical',
            'description' => 'Philosophical fiction is fiction in which a significant proportion of the work is devoted to a discussion of the sort of questions normally addressed in discursive philosophy. These might include the function and role of society, the purpose of life, ethics or morals, the role of art in human lives, and the role of experience or reason in the development of knowledge. Philosophical fiction works would include the so-called novel of ideas, including a significant proportion of science fiction, utopian and dystopian fiction, and Bildungsroman. The modus operandi seems to be to use a normal story to simply explain difficult and dark parts of human life.',
        ));

        Genre::create(array(
            'name' => 'Political',
            'description' => 'Political fiction is a subgenre of fiction that deals with political affairs. Political fiction has often used narrative to provide commentary on political events, systems and theories. Works of political fiction often "directly criticize an existing society or... present an alternative, sometimes fantastic, reality." Prominent pieces of political fiction have included the totalitarian dystopias of the early 20th century such as Jack Londons The Iron Heel and Sinclair Lewis It Cant Happen Here. ',
        ));

        Genre::create(array(
            'name' => 'Romantic',
            'description' => 'The term "romance" has multiple meanings; historical romances like those of Walter Scott would use the term to mean "a fictitious narrative in prose or verse; the interest of which turns upon marvellous and uncommon incidents".[8] But most often a romance is understood to be "love stories", emotion-driven stories that are primarily focused on the relationship between the main characters of the story. Beyond the focus on the relationship, the biggest defining characteristic of the romance genre is that a happy ending is always guaranteed...[9][10] perhaps marriage and living "happily ever after", or simply that the reader sees hope for the future of the romantic relationship.[10] Due to the wide definition of romance, romance stories cover a wide variety of subjects and often fall into other genre categories as well as romance,',
        ));

        Genre::create(array(
            'name' => 'Satire',
            'description' => 'Often strictly defined as a literary genre or form, though in practice it is also found in the graphic and performing arts. In satire, human or individual vices, follies, abuses, or shortcomings are held up to censure by means of ridicule, derision, burlesque, irony, or other methods, ideally with the intent to bring about improvement. Satire is usually meant to be funny, but its purpose is not primarily humour as an attack on something the author disapproves of, using wit. A common, almost defining feature of satire is its strong vein of irony or sarcasm, but parody, burlesque, exaggeration, juxtaposition, comparison, analogy, and double entendre all frequently appear in satirical speech and writing. The essential point, is that "in satire, irony is militant." This "militant irony" (or sarcasm) often professes to approve (or at least accept as natural) the very things the satirist actually wishes to attack.',
        ));

        Genre::create(array(
            'name' => 'Science Fiction',
            'description' => 'Science fiction is similar to fantasy, except stories in this genre use scientific understanding to explain the universe that it takes place in. It generally includes or is centered on the presumed effects or ramifications of computers or machines; travel through space, time or alternate universes; alien life-forms; genetic engineering; or other such things. The science or technology used may or may not be very thoroughly elaborated on; stories whose scientific elements are reasonably detailed, well-researched and considered to be relatively plausible given current knowledge and technology are often referred to as hard science fiction.',
        ));

        Genre::create(array(
            'name' => 'Thriller',
            'description' => 'A Thriller is a story that is usually a mix of fear and excitement. It has traits from the suspense genre and often from the action, adventure or mystery genres, but the level of terror makes it borderline horror fiction at times as well. It generally has a dark or serious theme, which also makes it similar to drama.',
        ));

        Genre::create(array(
            'name' => 'Western',
            'description' => 'Stories in the Western genre are set in the American West, between the time of the Civil war and the early twentieth century.[15] The setting of a wilderness or uncivilized area is especially important to the genre, and the setting is often described richly and in-depth. They focus on the adventure of the main character(s) and the contrast between civilization or society and the untamed wilderness, often featuring the characters working to bring civilization to the wilderness.[15][16] This genre periodically overlaps with historical fiction, and while a more traditional definition of westerns is that of stories about lone men facing the frontier, more modern definitions and writings are often expanded to include any person or persons in this time period that feature a strong tone of the contrast between civilization and wilderness and emphasize the independence of the main character(s).',
        ));

        Genre::create(array(
            'name' => 'Christmas',
            'description' => 'A Christmas movie is a story about the popular holiday featuring stories of tidings and good cheer.',
        ));

    }
}
