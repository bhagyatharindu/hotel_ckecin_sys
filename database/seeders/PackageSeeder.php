<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Package::insert([
            [
                'package_type' => 1,
                'room_suite_type' => 'Standard',
                'stay_type' => 'FB',
                'price_per_night' => 25000,
                "tax" => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'package_type' => 2,
                'room_suite_type' => 'Standard',
                'stay_type' => 'BB',
                'price_per_night' => 15000,
                "tax" => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'package_type' => 3,
                'room_suite_type' => 'Deluxe',
                'stay_type' => 'FB',
                'price_per_night' => 40000,
                "tax" => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'package_type' => 4,
                'room_suite_type' => 'Deluxe',
                'stay_type' => 'BB',
                'price_per_night' => 25000,
                "tax" => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
