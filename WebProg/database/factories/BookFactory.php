<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = ucwords($this->faker->words(rand(1, 4), true));

        return [
            'publisher_id' => rand(1, 4),
            'title' => $title,
            'author' => $this->faker->name(),
            'year' => rand(2002, 2022),
            'synopsis' => $this->faker->paragraph(1),
            'image' => $this->faker->imageUrl(100, 180, $title)
        ];
    }
}
