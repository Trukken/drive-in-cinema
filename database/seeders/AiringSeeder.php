<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AiringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('airings')->insert([
            'start' => '1970-01-01 00:00:00',
            'number_of_parking_spots' => 200,
            'movie_id' => 1,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('airings')->insert([
            'start' => (new DateTime())->format('Y-m-d H:i:s'),
            'number_of_parking_spots' => 200,
            'movie_id' => 1,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('airings')->insert([
            'start' => '2038-01-19 03:13:07',
            'number_of_parking_spots' => 200,
            'movie_id' => 1,
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('airings')->insert([
            'start' => '1970-01-01 00:00:00',
            'number_of_parking_spots' => 200,
            'movie_id' => 2,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('airings')->insert([
            'start' => (new DateTime())->format('Y-m-d H:i:s'),
            'number_of_parking_spots' => 200,
            'movie_id' => 2,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('airings')->insert([
            'start' => '2038-01-19 03:13:07',
            'number_of_parking_spots' => 200,
            'movie_id' => 2,
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('airings')->insert([
            'start' => '1970-01-01 00:00:00',
            'number_of_parking_spots' => 200,
            'movie_id' => 3,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('airings')->insert([
            'start' => (new DateTime())->format('Y-m-d H:i:s'),
            'number_of_parking_spots' => 200,
            'movie_id' => 3,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('airings')->insert([
            'start' => '2038-01-19 03:13:07',
            'number_of_parking_spots' => 200,
            'movie_id' => 3,
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('airings')->insert([
            'start' => '1970-01-01 00:00:00',
            'number_of_parking_spots' => 200,
            'movie_id' => 4,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('airings')->insert([
            'start' => (new DateTime())->format('Y-m-d H:i:s'),
            'number_of_parking_spots' => 200,
            'movie_id' => 4,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('airings')->insert([
            'start' => '2038-01-19 03:13:07',
            'number_of_parking_spots' => 200,
            'movie_id' => 4,
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('airings')->insert([
            'start' => '1970-01-01 00:00:00',
            'number_of_parking_spots' => 200,
            'movie_id' => 5,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('airings')->insert([
            'start' => (new DateTime())->format('Y-m-d H:i:s'),
            'number_of_parking_spots' => 200,
            'movie_id' => 5,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('airings')->insert([
            'start' => '2038-01-19 03:13:07',
            'number_of_parking_spots' => 200,
            'movie_id' => 5,
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
