<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Leader>
 */
class LeaderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'leader_name' => $this->faker->name,
            'image' => $this->faker->imageUrl(400, 400, 'person', true),
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
