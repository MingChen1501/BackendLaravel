<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 20; ++$i) {
            $created_at = $faker->dateTimeBetween('-1 years', 'now');
            \App\Models\Story::create([
                'title' => $faker->sentence,
                'type' => $faker->randomElement(['image', 'object', 'animation']),
                'thumbnail' => $faker->imageUrl(),
                'language' => $faker->randomElement(['en', 'vi']),
                'created_at' => $created_at,
                'updated_at' => $created_at,
            ]);
        }
    }
}
