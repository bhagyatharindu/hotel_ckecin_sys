<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $booking_room_id =  $this->faker->numberBetween(1, 10);
        if (
            $booking_room_id == 4 || $booking_room_id == 5 ||
            $booking_room_id == 6 || $booking_room_id == 8 ||
            $booking_room_id == 9 || $booking_room_id == 10 ||
            $booking_room_id == 11 || $booking_room_id == 12 ||
            $booking_room_id == 15 || $booking_room_id == 16 ||
            $booking_room_id == 20 || $booking_room_id == 22 ||
            $booking_room_id == 23 || $booking_room_id == 27 ||
            $booking_room_id == 29
        ) {
            $booking_package_type = $this->faker->numberBetween(1, 2);
        } else {
            $booking_package_type = $this->faker->numberBetween(3, 4);
        }
        return [
            "booking_guest_id" => $this->faker->numberBetween(1, 20),
            "booking_room_id" => $booking_room_id,
            "booking_package_type" => $booking_package_type,
            "number_of_nights" => $this->faker->numberBetween(1, 5),
            'check_in' => $this->faker->dateTimeBetween($startDate = '-1 days', $endDate = 'now' . $timezone = null),
            'check_out' => $this->faker->dateTimeBetween($startDate = '+2 days', $endDate = '+5 days' . $timezone = null),
        ];
    }
}
