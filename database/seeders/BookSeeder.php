<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'title' => 'Musashi',
                'author' => 'Eiji Yoshikawa',
                'published_year' => 1935,
                'genre' => 'Historical Fiction',
                'description' => 'An epic tale of the legendary samurai Miyamoto Musashi and his quest for perfection in swordsmanship.',
            ],
            [
                'title' => 'Hagakure: The Book of the Samurai',
                'author' => 'Yamamoto Tsunetomo',
                'published_year' => 1716,
                'genre' => 'Philosophy',
                'description' => 'A spiritual guide for samurai, exploring the code of Bushido and the way of the warrior.',
            ],
            [
                'title' => 'Taiko: An Epic Novel of War and Glory in Feudal Japan',
                'author' => 'Eiji Yoshikawa',
                'published_year' => 1941,
                'genre' => 'Historical Fiction',
                'description' => 'A fictionalized biography of Toyotomi Hideyoshi, a peasant who rose to become a powerful samurai lord.',
            ],
            [
                'title' => 'Samurai: The Code of the Warrior',
                'author' => 'Thomas Louis and Tommy Ito',
                'published_year' => 2008,
                'genre' => 'Non-fiction',
                'description' => 'An exploration of the samurai code and history, including Bushido, martial arts, and Japanese warfare.',
            ],
            [
                'title' => 'The Book of Five Rings',
                'author' => 'Miyamoto Musashi',
                'published_year' => 1645,
                'genre' => 'Philosophy',
                'description' => 'A classic text on strategy and philosophy written by the famous samurai Miyamoto Musashi.',
            ],
            [
                'title' => 'Samurai Rising: The Epic Life of Minamoto Yoshitsune',
                'author' => 'Pamela S. Turner',
                'published_year' => 2016,
                'genre' => 'Biography',
                'description' => 'The thrilling biography of the legendary samurai warrior Minamoto Yoshitsune.',
            ],
            [
                'title' => 'The Samurai’s Garden',
                'author' => 'Gail Tsukiyama',
                'published_year' => 1994,
                'genre' => 'Historical Fiction',
                'description' => 'A touching story set during the 1930s about a young man’s healing journey in a Japanese village.',
            ],
            [
                'title' => 'Bushido: The Soul of Japan',
                'author' => 'Inazo Nitobe',
                'published_year' => 1899,
                'genre' => 'Philosophy',
                'description' => 'A classic interpretation of the samurai code and ethics, exploring the principles of Bushido.',
            ],
            [
                'title' => 'The Last Samurai: The Life and Battles of Saigo Takamori',
                'author' => 'Mark Ravina',
                'published_year' => 2004,
                'genre' => 'Biography',
                'description' => 'The life story of Saigo Takamori, known as the "last samurai," who led a rebellion against the modernization of Japan.',
            ],
            [
                'title' => 'Shogun',
                'author' => 'James Clavell',
                'published_year' => 1975,
                'genre' => 'Historical Fiction',
                'description' => 'A sweeping tale of an Englishman who becomes entangled in the samurai culture of feudal Japan.',
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
