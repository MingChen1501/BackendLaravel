<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $stories = \App\Models\Story::all();
        foreach ($stories as $story) {
            for ($j = 0; $j < 20; ++$j) {
                $created_at = $faker->dateTimeBetween('-1 years', 'now');
                \App\Models\Page::create([
                    'story_id' => $story->id,
                    'page_number' => ($j + 1),
                    'background' => $faker->imageUrl(),
                    'created_at' => $created_at,
                ]);
            }
        }
    }
}
