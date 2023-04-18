<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstname' => fake()->firstName(),
            'middlename' => fake()->lastName(),
            'lastname' => fake()->lastName(),
            'course' => fake()->randomElement(['BSIT', 'BSCS', 'BSA', 'BSBA']),
            'year_level' => fake()->randomElement([1, 2, 3, 4]),
            'school_year_start' => fake()->date(),
            'school_year_end' => fake()->date(),
        ];
    }
}
