<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');

        $author_specialist = [
            "Food Expert",
            "Beverage Expert"
        ];

        for($i = 0; $i < 2; $i++){
            Author::create([
                "author_name" => $faker->name,
                "author_photo" => "author".($i+1).".jpg",
                "author_specialist" => $author_specialist[$i]
            ]);
        }

    }
}
