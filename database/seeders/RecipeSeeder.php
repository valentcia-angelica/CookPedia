<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\File;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        $recipe_name = [
            'Creamy Garlic Parmesan Chicken',
            'Vegan Salad Bowl',
            'Classic Beef Tacos',
            'Tropical Mango Smoothie',
            'Iced Matcha Latte',
            'Iced Americano with Vanilla Ice Cream'
        ];

        $recipe_desc = [
            'This creamy garlic Parmesan chicken is a comforting dish, featuring tender chicken breasts smothered in a rich and flavorful garlic-Parmesan sauce. Perfect for a cozy dinner, it pairs well with mashed potatoes or a side of vegetables.

Ingredients:

4 boneless, skinless chicken breasts
2 tbsp olive oil
4 garlic cloves, minced
1 cup heavy cream
1/2 cup grated Parmesan cheese
1 tsp dried thyme
Salt and pepper to taste
Fresh parsley, chopped (for garnish)
Steps:

Season the chicken breasts with salt, pepper, and dried thyme.
In a large skillet, heat the olive oil over medium-high heat. Add the chicken breasts and cook for 6-7 minutes on each side until golden brown and cooked through. Remove the chicken and set aside.
In the same skillet, add minced garlic and cook for 1 minute until fragrant.
Pour in the heavy cream and bring to a simmer. Stir in the Parmesan cheese, and cook for another 3-4 minutes until the sauce thickens.
Return the chicken to the skillet, coating it in the creamy sauce. Simmer for another 5 minutes to ensure the chicken is fully coated and heated through.
Garnish with fresh parsley and serve hot.',

'Description:
A nourishing and vibrant dish, this Vegan Buddha Bowl is packed with colorful vegetables, grains, and a flavorful tahini dressing. It’s easy to customize with your favorite ingredients and makes for a great lunch or dinner.

Ingredients:

1 cup quinoa (cooked)
1 cup chickpeas, cooked or canned
1/2 avocado, sliced
1/2 cup roasted sweet potato cubes
1/2 cup cucumber, sliced
1/4 cup shredded carrots
1/4 cup red cabbage, shredded
2 tbsp tahini
1 tbsp lemon juice
1 tbsp maple syrup
Salt and pepper to taste
Olive oil for roasting
Steps:

Preheat the oven to 400°F (200°C). Toss the sweet potato cubes in olive oil, salt, and pepper, and roast for 20-25 minutes until tender.
Cook the quinoa according to package instructions.
In a small bowl, whisk together tahini, lemon juice, maple syrup, salt, and water to make the dressing.
In a large bowl or plate, layer the quinoa, chickpeas, avocado slices, roasted sweet potato, cucumber, shredded carrots, and red cabbage.
Drizzle the tahini dressing over the bowl and garnish with a sprinkle of salt and pepper.
Serve immediately and enjoy!',

'Description:
A nourishing and vibrant dish, this Vegan Buddha Bowl is packed with colorful vegetables, grains, and a flavorful tahini dressing. It’s easy to customize with your favorite ingredients and makes for a great lunch or dinner.

Ingredients:

1 cup quinoa (cooked)
1 cup chickpeas, cooked or canned
1/2 avocado, sliced
1/2 cup roasted sweet potato cubes
1/2 cup cucumber, sliced
1/4 cup shredded carrots
1/4 cup red cabbage, shredded
2 tbsp tahini
1 tbsp lemon juice
1 tbsp maple syrup
Salt and pepper to taste
Olive oil for roasting
Steps:

Preheat the oven to 400°F (200°C). Toss the sweet potato cubes in olive oil, salt, and pepper, and roast for 20-25 minutes until tender.
Cook the quinoa according to package instructions.
In a small bowl, whisk together tahini, lemon juice, maple syrup, salt, and water to make the dressing.
In a large bowl or plate, layer the quinoa, chickpeas, avocado slices, roasted sweet potato, cucumber, shredded carrots, and red cabbage.
Drizzle the tahini dressing over the bowl and garnish with a sprinkle of salt and pepper.
Serve immediately and enjoy!',

'Description:
A nourishing and vibrant dish, this Vegan Buddha Bowl is packed with colorful vegetables, grains, and a flavorful tahini dressing. It’s easy to customize with your favorite ingredients and makes for a great lunch or dinner.

Ingredients:

1 cup quinoa (cooked)
1 cup chickpeas, cooked or canned
1/2 avocado, sliced
1/2 cup roasted sweet potato cubes
1/2 cup cucumber, sliced
1/4 cup shredded carrots
1/4 cup red cabbage, shredded
2 tbsp tahini
1 tbsp lemon juice
1 tbsp maple syrup
Salt and pepper to taste
Olive oil for roasting
Steps:

Preheat the oven to 400°F (200°C). Toss the sweet potato cubes in olive oil, salt, and pepper, and roast for 20-25 minutes until tender.
Cook the quinoa according to package instructions.
In a small bowl, whisk together tahini, lemon juice, maple syrup, salt, and water to make the dressing.
In a large bowl or plate, layer the quinoa, chickpeas, avocado slices, roasted sweet potato, cucumber, shredded carrots, and red cabbage.
Drizzle the tahini dressing over the bowl and garnish with a sprinkle of salt and pepper.
Serve immediately and enjoy!',

'Description:
A nourishing and vibrant dish, this Vegan Buddha Bowl is packed with colorful vegetables, grains, and a flavorful tahini dressing. It’s easy to customize with your favorite ingredients and makes for a great lunch or dinner.

Ingredients:

1 cup quinoa (cooked)
1 cup chickpeas, cooked or canned
1/2 avocado, sliced
1/2 cup roasted sweet potato cubes
1/2 cup cucumber, sliced
1/4 cup shredded carrots
1/4 cup red cabbage, shredded
2 tbsp tahini
1 tbsp lemon juice
1 tbsp maple syrup
Salt and pepper to taste
Olive oil for roasting
Steps:

Preheat the oven to 400°F (200°C). Toss the sweet potato cubes in olive oil, salt, and pepper, and roast for 20-25 minutes until tender.
Cook the quinoa according to package instructions.
In a small bowl, whisk together tahini, lemon juice, maple syrup, salt, and water to make the dressing.
In a large bowl or plate, layer the quinoa, chickpeas, avocado slices, roasted sweet potato, cucumber, shredded carrots, and red cabbage.
Drizzle the tahini dressing over the bowl and garnish with a sprinkle of salt and pepper.
Serve immediately and enjoy!',

'Description:
A nourishing and vibrant dish, this Vegan Buddha Bowl is packed with colorful vegetables, grains, and a flavorful tahini dressing. It’s easy to customize with your favorite ingredients and makes for a great lunch or dinner.

Ingredients:

1 cup quinoa (cooked)
1 cup chickpeas, cooked or canned
1/2 avocado, sliced
1/2 cup roasted sweet potato cubes
1/2 cup cucumber, sliced
1/4 cup shredded carrots
1/4 cup red cabbage, shredded
2 tbsp tahini
1 tbsp lemon juice
1 tbsp maple syrup
Salt and pepper to taste
Olive oil for roasting
Steps:

Preheat the oven to 400°F (200°C). Toss the sweet potato cubes in olive oil, salt, and pepper, and roast for 20-25 minutes until tender.
Cook the quinoa according to package instructions.
In a small bowl, whisk together tahini, lemon juice, maple syrup, salt, and water to make the dressing.
In a large bowl or plate, layer the quinoa, chickpeas, avocado slices, roasted sweet potato, cucumber, shredded carrots, and red cabbage.
Drizzle the tahini dressing over the bowl and garnish with a sprinkle of salt and pepper.
Serve immediately and enjoy!'


        ];

   

        for($i = 0; $i < count($recipe_name); $i++){
            Recipe::create([
                "recipe_name" => $recipe_name[$i],
                "recipe_photo" => "recipe".($i+1).".jpg",
                "recipe_desc" => $recipe_desc[$i],
                "upload_date" => $faker->dateTimeBetween('-6 month', 'now'),
                "category_id" => $i < 3 ? 1 : 2,
                "author_id" => $i < 3 ? 1 : 2
            ]);
        }
    }
}
