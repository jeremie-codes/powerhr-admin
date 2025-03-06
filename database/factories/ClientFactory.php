<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'adress' => $this->faker->address,
            'activity' => $this->faker->word,
            'phone' => $this->faker->phoneNumber,
            'logo' => $this->faker->imageUrl(200, 200, 'business', true, 'Faker'),
            'contact_name' => $this->faker->name,
            'contact_phone' => $this->faker->phoneNumber,
            'contact_email' => $this->faker->safeEmail,
            'website' => $this->faker->url,
            'description' => $this->faker->sentence,
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'user_id' => User::factory()->customer(),
        ];
    }
}
