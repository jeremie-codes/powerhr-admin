<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prospect>
 */
class ProspectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matricule'  => $this->faker->asciify('**********'),
            'subject' => $this->faker->jobTitle,
            'name'=> $this->faker->name(),
            'email'  => $this->faker->unique()->safeEmail(),
            'phone'  => $this->faker->phoneNumber,
            'message'  => $this->faker->text(300),
            'readen' => false
        ];
    }
}
