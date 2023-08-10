<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Story;
use App\Models\Text;
use App\Models\TextConfig;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TextConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        echo "seeding text configs...";
        $faker = Factory::create();
        $stories = Story::all();
        $texts = Text::all();
        $pages = Page::all();
        $textIndex = 1;
        foreach ($stories as $story) {
            echo "story: " . $story->id . "\n";
            foreach ($pages as $page) {
                echo "page: " . $page->id . "\n";
                echo "page: " . $page->story_id . "\n";
                foreach(range(1, 3) as $order) {
                    if ($textIndex > $texts->count()) {
                        return;
                    }
                    echo "text: " . $texts->count() . "\n";
                    TextConfig::create([
                        'page_id' => $page->id,
                        'text_id' => $textIndex,
                        'position' => json_encode([
                            'x' => $faker->randomNumber(2),
                            'y' => $faker->randomNumber(2)
                        ]),
                        'order' => $order,
                    ]);
                    $textIndex++;
                }
            }
        }
        echo "done";
    }
}
