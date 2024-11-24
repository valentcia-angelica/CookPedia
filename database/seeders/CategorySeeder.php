<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $category_name = [
            'Food',
            'Baverage'
        ];

        for($i = 0; $i < 2; $i++){
            Category::create([
                'category_name' => $category_name[$i]
            ]);
        }
    }
}
