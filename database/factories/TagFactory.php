<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement([
                'Laravel',
                'PHP',
                'Remote',
                'Full-time',
                'Backend',
                'Frontend',
                'DevOps',
                'Internship',
                'Hybrid',
                'Part-time',
                'Contract',
                'Senior',
                'Junior',
                'Mid-level',
                'JavaScript',
                'Vue.js',
                'React',
                'Angular',
                'Node.js',
                'Django',
                'Python',
                'Ruby on Rails',
                'Java',
                'C#',
                'Go',
            ]),
        ];
    }
}
