<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "guest_name" => $this->faker->name,
            "guest_nic" => $this->faker->regexify('/^\d{9}[VvXx]$/'),
            "guest_phone" => $this->faker->phoneNumber,
        ];
    }
}
