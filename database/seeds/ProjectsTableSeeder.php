<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $current_client = 31;

        for ($i = 0; $i < 10; $i++) {
            DB::table('projects')->insert([
                'name' => $faker->company,
                'description' => $faker->catchPhrase . ' ' . $faker->bs,
                'type_id' => $faker->numberBetween(1, 4),
                'status_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $current_client++;
        }
    }
}
