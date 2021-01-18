<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =  Faker::create();

        DB::table('game_publishers')->insert([
            'name' => $faker->company,
            'address' => $faker->address,
            'phone_number' => $faker->phoneNumber,
            'email' => $faker->email,
        ]);

        $gp_id = DB::table('game_publishers')->pluck('id')->first();

        DB::table('games')->insert([
            'title' => Str::random(10),
            'publisher' => Str::random(10),
            'publisher_id' => $gp_id,
            'developer' => Str::random(10),
            'image' => Str::random(10),
        ]);
    }
}
