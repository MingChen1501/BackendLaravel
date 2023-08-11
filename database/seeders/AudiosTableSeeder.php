<?php

namespace Database\Seeders;

use App\Models\Audio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AudiosTableSeeder extends Seeder
{
    private string $sampleUrl = "D:\internship monkey\resource project story text\audios-20230810T065541Z-001\audios\apple.mp3";
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 300; $i++) {
            Audio::create([
                'text_id' => $i,
                'url' => $this->sampleUrl,
                'sync_text_sound' => null
            ]);
        }
    }
}
