<?php

namespace Database\Factories;

use App\Models\Personne;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personne::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matricule' => $this->faker->numerify('#########'),
            'nom' => $this->faker->lastName,
            'postNom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'dateNaissance' => $this->faker->date,
            'sexe' => $this->faker->randomElement(['male', 'female']),
            'nationalite' => $this->faker->country,
            'adresse' => $this->faker->address,
            'codePostal' => $this->faker->postcode,
            'ville' => $this->faker->city,
            'telephone' => $this->faker->phoneNumber,
            'user_id' => User::inRandomOrder()->first()->id, // Associate with an existing user
        ];
    }
}