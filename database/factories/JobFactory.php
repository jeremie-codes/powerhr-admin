<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition()
    {
        return [
            'user_id' => User::factory()->customer(),
            'category_id' => Category::factory(),
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraphs(3, true),
            'salary' => $this->faker->numberBetween(30000, 150000),
            'location' => $this->faker->city,
            'duration' => $this->faker->randomElement(['3 months', '6 months', '1 year', '2 years']),
            'work_type' => $this->faker->randomElement(['Remote', 'Hybrid', 'On-site']),
            'contract_type' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract', 'Temporary']),
            'matricule' => $this->faker->unique()->numerify('JOB-####'),
            'is_current' => $this->faker->boolean,
            'is_open' => $this->faker->boolean,
            'skills' => implode(',', $this->faker->words(5)),
            'available_until' => $this->faker->dateTimeBetween('now', '+6 months'),
        ];
    }
}
