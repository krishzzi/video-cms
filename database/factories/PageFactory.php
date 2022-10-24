<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $name = fake()->name,
            'desc' => fake()->paragraph,
            'slug' => Str::slug($name),
            'priority' => fake()->randomElement([0,1,2,3,4,5,6,7,8,9,10,11,12,13,14]),
            'section' => fake()->randomElement([0,1,2,3])
        ];
    }
}
