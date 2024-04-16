<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movie = [
            [
                'name' => 'Big Hero 6',
                'slug' => 'big-hero-6',
                'category' => 'Animation',
                'video_url' => 'https://www.youtube.com/watch?v=vco0SpSz17g',
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/id/4/4b/Big_Hero_6_%28film%29_poster.jpg',
                'rating' => 7.8,
                'is_featured' => 1
            ],
            [
                'name' => 'Spirited Away',
                'slug' => 'spirited-away',
                'category' => 'Animation',
                'video_url' => 'https://www.youtube.com/watch?v=ByXuk9QqQkk',
                'thumbnail' => 'https://image.tmdb.org/t/p/w500/39wmItIWsg5sZMyRUHLkWBcuVCM.jpg',
                'rating' => 9.5,
                'is_featured' => 0
            ],
        ];
        
        Movie::insert($movie);
    }
}
