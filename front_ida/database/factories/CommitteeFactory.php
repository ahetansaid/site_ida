<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommitteeFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement([
                'Education', 'Health', 'Environment', 'Human Rights', 'Agriculture',
            ]),
            'description' => $this->faker->paragraph(3),
            'objectives' => $this->faker->paragraph(2),
            'photo_path' => 'committees/' . $this->faker->image('public/storage/committees', 640, 480, null, false),
        ];
    }
}