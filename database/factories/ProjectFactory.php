<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $startingDate = $this->faker->dateTimeThisYear('+1 month');
        $endingDate   = date("Y-m-d H:i:s", strtotime('+1 Week', $startingDate->getTimestamp()));
        // dd($endingDate);

        return [
            'project_name' => $this->faker->bs(),
            'description' => $this->faker->text,
            'start_date' => $startingDate,
            'end_date' => $endingDate,
            'progress' => $this->faker->numberBetween(1, 100),
            'leader_id' => $this->faker->numberBetween(1, 15),
            'client_id' => $this->faker->numberBetween(1, 15)
        ];
    }
}
