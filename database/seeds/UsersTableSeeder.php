<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // SEEDER FOR ADMIN BUGSLAYERS
        $bugslayers = ['Mars', 'Des', 'Ruby Ann', 'Betty', 'Chellie', 'Jean'];

        foreach ($bugslayers as $bugslayer) {
            DB::table('users')->insert([
                'first_name' => $bugslayer,
                'last_name' => 'Bugslayer',
                'email' => $faker->unique()->safeEmail,
                'status' => true,
                'username' => $faker->unique()->userName,
                'password' => Hash::make('bugslayers'),
                'contact_number' => $faker->tollFreePhoneNumber,
                // 'home_address' => $faker->address,
                'role_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        // SEEDER FOR COMMUNITY MEMBERS
        for ($i = 0; $i < 24; $i++) {
            DB::table('users')->insert([
                'first_name' => $faker->name,
                'last_name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'status' => true,
                'username' => $faker->unique()->userName,
                'password' => Hash::make('bugslayers'),
                'contact_number' => $faker->tollFreePhoneNumber,
                'role_id' => 1,
                'portfolio' => $faker->url,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        // SEEDER FOR CLIENTS OR BUSINESS OWNERS
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'first_name' => $faker->name,
                'last_name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'status' => true,
                'username' => $faker->unique()->userName,
                'password' => Hash::make('bugslayers'),
                'contact_number' => $faker->tollFreePhoneNumber,
                'role_id' => 2,
                'business_name' => $faker->company . ' ' . $faker->companySuffix,
                'business_address' => $faker->address,
                'credit_card_name' => $faker->creditCardType,
                'credit_card_number' => $faker->creditCardNumber,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }


    }
}
