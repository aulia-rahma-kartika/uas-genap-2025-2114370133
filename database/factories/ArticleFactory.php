<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $this->faker->paragraph(5),
            'category_id' => Category::inRandomOrder()->first()->id ?? 1,
            'is_publish' => $this->faker->boolean(),
            'published_at' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
        ];
    }
}
