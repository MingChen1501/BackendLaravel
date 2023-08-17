<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; ++$i) {
            \App\Models\User::create([
                'username' => $faker->userName,
                'password' => Hash::make('123456'),
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
            ]);
        }
    }
}
