<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\subcategory>
 */
class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array

    {
        $category_name = fake()->name;
        return [
            // 'categorie_id' => 1,
            'name' => $category_name,
            'slug' => Str::slug($category_name),
            'is_active' => 1
        ];
    }
}
