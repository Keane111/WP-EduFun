<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $courseTitles = [
            'Softeare Engineer',
            'Network Security',
            'Interactive Multimedia',

        ];

        
        $writerNames = [
            'Raka Putra Wicaksono',
            'Bia Mecca Annica',
            'Abi Firmansyah',

        ];

        $categories = [
            'Interactive Multimedia',
            'Software Engineering',

        ];

        $title = fake()->randomElement($courseTitles);
        $slug = Str::slug($title);

        return [
            'title' => $title,
            'slug' => $slug,
            'description' => $this->generateIndonesianDescription(),
            'category' => fake()->randomElement($categories),
            'writer' => fake()->randomElement($writerNames),
            'image' => 'course-' . fake()->numberBetween(1, 10) . '.jpg',
            'created_at' => fake()->dateTimeBetween('-2 years', 'now'),
            'updated_at' => now(),
        ];
    }


    public function interactiveMultimedia(): static
    {
        return $this->state(fn (array $attributes) => [
            'category' => 'Interactive Multimedia',
            'writer' => 'Dr. Raka Putra Wicaksono, M.Kom',
        ]);
    }


    public function softwareEngineering(): static
    {
        return $this->state(fn (array $attributes) => [
            'category' => 'Software Engineering',
            'writer' => 'Prof. Bia Mecca Annica, S.Kom, M.T',
        ]);
    }

    public function popular(): static
    {
        return $this->state(fn (array $attributes) => [
            'created_at' => fake()->dateTimeBetween('-1 month', 'now'),
            'views' => fake()->numberBetween(1000, 5000),
        ]);
    }
}
