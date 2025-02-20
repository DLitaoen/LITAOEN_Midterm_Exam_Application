<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

class AnimeController extends Controller
{
    // Anime Array
    private $ongoingAnime = [
        [
            'english_title' => 'Solo Leveling Season 2: Arise from the Shadow',
            'japanese_title' => 'Ore dake Level Up na Ken Season 2: Arise from the Shadow',
            'genre' => 'Action, Adventure, Fantasy',
            'rating' => 8.85,
            'episodes' => 13,
            'release_year' => 2025,
            'status' => 'Ongoing',
            'studio' => 'A-1 Pictures',
            'synopsis' => 'Sung Jin-Woo, dubbed the weakest hunter of all mankind, grows stronger by the day with the supernatural powers he has gained. However, keeping his skills hidden becomes more difficult as dungeon-related incidents pile up around him. When Jin-Woo and a few other low-ranked hunters are the only survivors of a dungeon that turns out to be a bigger challenge than initially expected, he draws attention once again, and hunter guilds take an increased interest in him. Meanwhile, a strange hunter who has been lost for ten years returns with a dire warning about an upcoming catastrophic event. As the calamity looms closer, Jin-Woo must continue leveling up to make sure nothing stops him from reaching his ultimate goal—saving the life of his mother. [Written by MAL Rewrite]',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/1448/147351.jpg'
        ],
        [
            'english_title' => 'Sakamoto Days',
            'japanese_title' => 'SAKAMOTO DAYS',
            'genre' => 'Action, Comedy',
            'rating' => 7.80,
            'episodes' => 11,
            'release_year' => 2025,
            'status' => 'Ongoing',
            'studio' => 'TMS Entertainment',
            'synopsis' => 'The name Tarou Sakamoto once instilled fear in every villain. No other professional hitman matched his prowess, and fellow assassins revered him. However, Sakamoto fell in love. In five short years, he married, became a father, put on some weight, and traded his weapons for an apron as he became the owner of a humble convenience store. Although Sakamoto is decidedly retired, he finds his old life of crime hard to shake off. His former partner, Shin Asakura, reappears and resolves to stay with Sakamoto\'s family under their strict no-kill rule. To make matters worse, a large bounty is placed on Sakamoto\'s head. Numerous assassins now pursue him—but they are in for a surprise. Sakamoto has not lost his edge, and no matter what tricks his enemies pull, he will fight off every last one to protect his dear family. [Written by MAL Rewrite]',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/1026/146459.jpg'
        ],
        [
            'english_title' => 'The Apothecary Diaries Season 2',
            'japanese_title' => 'Kusuriya no Hitorigoto 2nd Season',
            'genre' => 'Drama, Mystery',
            'rating' => 8.76,
            'episodes' => 24,
            'release_year' => 2025,
            'status' => 'Ongoing',
            'studio' => 'OLM, TOHO Animation Studio',
            'synopsis' => 'Maomao, an apothecary\'s daughter, has been plucked from her peaceful life and sold to the lowest echelons of the imperial court. Now merely a maid, Maomao settles into her new mundane life and hides her extensive knowledge of medicine in order to avoid any unwanted attention. Not long after Maomao\'s arrival, the emperor\'s infant children inexplicably begin to experience grave symptoms—almost as if a curse has been cast. The curious Maomao easily solves the mystery and, to remain out of the limelight, attempts to leave an anonymous tip. Unfortunately, the dashing and perceptive eunuch Jinshi sees through it and manages to single her out. In recognition of her talent, Maomao is promoted to lady-in-waiting for the emperor\'s favorite concubine, Gyokuyou. As Maomao continues to remedy the numerous ailments afflicting the imperial court, her pharmaceutical expertise quickly proves indispensable. [Written by MAL Rewrite]',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/1708/138033.jpg'
        ],
        [
            'english_title' => 'Dr. Stone: Science Future',
            'japanese_title' => 'Dr.STONE SCIENCE FUTURE',
            'genre' => 'Adventure, Comedy, Sci-Fi',
            'rating' => 8.23,
            'episodes' => 12,
            'release_year' => 2025,
            'status' => 'Ongoing',
            'studio' => 'TMS Entertainment',
            'synopsis' => 'Fourth season of Dr. Stone.',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/1403/146479.jpg'
        ],
        [
            'english_title' => 'My Happy Marriage Season 2',
            'japanese_title' => 'Watashi no Shiawase na Kekkon 2nd Season',
            'genre' => 'Drama, Fantasy, Romance',
            'rating' => 7.80,
            'episodes' => 13,
            'release_year' => 2025,
            'status' => 'Ongoing',
            'studio' => 'Kinema Citrus',
            'synopsis' => 'The second season of Watashi no Shiawase na Kekkon.',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/1946/146770.jpg'
        ]
        ];

        public function index()
        {
            return view('anime.index', ['ongoingAnime' => $this->ongoingAnime]);
        }
}
