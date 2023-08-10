<?php

namespace Database\Seeders;

use App\Models\Text;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TextsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i = 0; $i < 300; ++$i) {
            Text::create([
                'text' => $faker->sentence
            ]);
        }
    }
}
