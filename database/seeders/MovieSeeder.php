<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            'title' => 'Cherry',
            'description' => 'Cherry drifts from college dropout to army medic in Iraq -- anchored only by his one true love, Emily. However, after returning from the war with PTSD, his life spirals into drugs and crime as he struggles to find his place in the world.',
            'age_rating' => 'R',
            'language' => 'en',
            'cover_image' => 'https://m.media-amazon.com/images/M/MV5BNTk5MmIzNmQtMjU3NC00NDA5LThlMGQtNDc4MzVmNzkwMzZmXkEyXkFqcGc@._V1_.jpg',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('movies')->insert([
            'title' => 'Curious George',
            'description' => 'The Man in the Yellow Hat is an oddball museum employee who looks after his pet monkey, an inquisitive and wonderful creature whose enthusiasm often gets the best of him.',
            'age_rating' => 'G',
            'language' => 'en',
            'cover_image' => 'https://m.media-amazon.com/images/M/MV5BODIxNzYxNDEzNl5BMl5BanBnXkFtZTgwMjA1NTM2MTI@._V1_.jpg',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('movies')->insert([
            'title' => 'Star Wars: Episode IV - A New Hope',
            'description' => 'Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire\'s world-destroying battle station, while also attempting to rescue Princess Leia from the mysterious Darth Vader.',
            'age_rating' => 'PG',
            'language' => 'en',
            'cover_image' => 'https://m.media-amazon.com/images/M/MV5BOGUwMDk0Y2MtNjBlNi00NmRiLTk2MWYtMGMyMDlhYmI4ZDBjXkEyXkFqcGc@._V1_.jpg',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('movies')->insert([
            'title' => 'Requiem for a Dream',
            'description' => 'The drug-induced utopias of four Coney Island people are shattered when their addictions run deep.',
            'age_rating' => 'NC-17',
            'language' => 'en',
            'cover_image' => 'https://m.media-amazon.com/images/M/MV5BMjUwYTZmNTQtZTIyZS00NTcwLWI4OTctZmM5NGVhNmZmODEzXkEyXkFqcGc@._V1_.jpg',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('movies')->insert([
            'title' => 'Beetlejuice Beetlejuice',
            'description' => 'Cherry drifts from college dropout to army medic in Iraq -- anchored only by his one true love, Emily. However, after returning from the war with PTSD, his life spirals into drugs and crime as he struggles to find his place in the world.',
            'age_rating' => 'PG-13',
            'language' => 'en',
            'cover_image' => 'https://m.media-amazon.com/images/M/MV5BNTk5MmIzNmQtMjU3NC00NDA5LThlMGQtNDc4MzVmNzkwMzZmXkEyXkFqcGc@._V1_.jpg',
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
