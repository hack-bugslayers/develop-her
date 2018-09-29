<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RatingsUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 7; $i < 30; $i++) {
            for ($rating_id = 1; $rating_id < 4; $rating_id++) {
                DB::table('ratings_users')->insert([
                    'user_id' => $i,
                    'rating_id' => $rating_id,
                    'value' => $faker->numberBetween(3,5),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
            }
        }
    }
}
