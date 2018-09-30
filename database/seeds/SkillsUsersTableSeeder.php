<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SkillsUsersTableSeeder extends Seeder
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
            DB::table('skills_users')->insert([
                'user_id' => $i,
                'skill_id' => $faker->numberBetween(1, 4)
            ]);

            DB::table('skills_users')->insert([
                'user_id' => $i,
                'skill_id' => $faker->numberBetween(5, 9)
            ]);
        }
    }
}
