<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(6, true),
            'body' => $this->faker->optional()->paragraph(3),
            'earring' => $this->faker->boolean(70),
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,

        ];
    }
}
