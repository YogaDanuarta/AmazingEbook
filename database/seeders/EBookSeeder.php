<?php

namespace Database\Seeders;

use App\Models\EBook;
use Illuminate\Database\Seeder;

class EBookSeeder extends Seeder
{
    public function run()
    {
        EBook::create([
            'title' => 'Paths of Glory',
            'author' => 'Stanley Kubrick',
            'description' => 'Begins with a voiceover describing the trench warfare situation of World War I up to 1916. In a château, General Georges Broulard, a member of the French General Staff, asks his subordinate, the ambitious General Mireau, to take a well-defended German position called the "Anthill". Mireau initially refuses, citing the impossibility of success, but when Broulard mentions a potential promotion, Mireau quickly convinces himself the attack will succeed.',
        ]);

        EBook::create([
            'title' => 'Endless Night',
            'author' => 'Agatha Christie',
            'description' => 'The story begins with Michael Rogers, a twenty-two year old, telling the reader about his time as a chauffeur and how he met the architect Rudolf Santonix. He plans to one day have a house built by Santonix. Mike is poor though, and so cant afford to hire Santonix to build the house he wants. Michael explains that hes a “rolling stone”; he isnt content doing just one thing and so has held down many different jobs over the years. One day he wants to settle down in his dream house with his dream woman, but for now he cant imagine settling down.',
        ]);

        EBook::create([
            'title' => 'Far from the Madding Crowd',
            'author' => 'Thomas Hardy',
            'description' => 'The novel is set in Thomas Hardys Wessex in rural southwest England, as had been his earlier Under the Greenwood Tree. It deals in themes of love, honour and betrayal, against a backdrop of the seemingly idyllic, but often harsh, realities of a farming community in Victorian England. It describes the life and relationships of Bathsheba Everdene with her lonely neighbour William Boldwood, the faithful shepherd Gabriel Oak, and the thriftless soldier Sergeant Troy.',
        ]);

        EBook::create([
            'title' => 'The Millstone',
            'author' => 'Margaret Drabble',
            'description' => 'Drabble has acknowledged the source of the title to be in Christs words: "But whoso shall offend one of these little ones who believe in me, it were better that a millstone were hanged about his neck and that he were drowned in the depth of the sea" (Matthew 18:6). The parallel between Christs words and the plot of the novel is established through the innocent though illegitimate baby, Octavia, the "little one", who is subject to harm, her congenital heart defect rendering her vulnerable in the extreme.',
        ]);

        EBook::create([
            'title' => 'The Moving Finger',
            'author' => 'Agatha Christie',
            'description' => 'Jerry and Joanna Burton, a brother and sister from London, take residence in a house owned by Miss Barton near the quiet town of Lymstock for the last phase of Jerrys recovery from injuries suffered in a plane crash. Shortly after moving in and meeting their neighbours, they receive an anonymous letter that makes the false accusation that the pair are lovers, not siblings.',
        ]);
    }
}
