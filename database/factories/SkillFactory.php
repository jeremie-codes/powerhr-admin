<?php

namespace Database\Factories;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
    protected $model = Skill::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->value('id'), // Crée un utilisateur associé
            'name' => $this->faker->word, // Génère un nom de compétence aléatoire
        ];
    }
}