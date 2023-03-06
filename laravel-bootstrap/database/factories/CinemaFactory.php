<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cinema>
 */
class CinemaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'name' => $this->faker->name,
            // 'address_line_1' => $this->faker->text,
            // 'address_line_2' => $this->faker->text,
            // 'town' => $this->faker->text,
            // 'county' => $this->faker->text,
            // 'eircode' => $this->faker->text
        ];
    }
}
