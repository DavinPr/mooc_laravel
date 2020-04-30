<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class SourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i<5; $i++){
            DB::table('sources')->insert([
                'source_id' => $i,
                'source_name' => $faker->name,
                'source_image' => $faker->imageUrl,
                'source_profession' => $faker->jobTitle,
                'source_quotes' => $faker->text,
                'source_instagram' => $faker->phoneNumber,
                'source_twitter' => $faker->phoneNumber,
                'source_youtube' => $faker->phoneNumber
            ]);
        }
    }
}
