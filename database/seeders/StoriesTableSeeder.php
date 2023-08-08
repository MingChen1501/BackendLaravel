<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $authors = Author::all();
        foreach ($authors as $author) {
            $created_at = $faker->dateTimeBetween('-1 years', 'now');
            \App\Models\Story::create([
                'title' => $faker->sentence,
                'author_id' => $author->id,
                'type' => $faker->randomElement(['image', 'object', 'animation']),
                'thumbnail' => $faker->imageUrl(),
                'language' => $faker->randomElement(['en', 'vi']),
                'created_at' => $created_at,
            ]);
        }
    }
}
