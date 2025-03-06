<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id, // Associate with an existing user
            'title' => $this->faker->jobTitle,
            'bio' => $this->faker->paragraph,
            'location' => $this->faker->city,
            'is_available' => $this->faker->boolean,
            'website' => $this->faker->url,
            'linkedin' => $this->faker->url,
            'twitter' => $this->faker->url,
            'github' => $this->faker->url,
        ];
    }
}