<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $ratings = ['accuracy', 'communication', 'overall experience'];

        foreach ($ratings as $rating) {
            DB::table('ratings')->insert([
                'name' => $rating,
                'description' => $faker->sentence(6, true),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
