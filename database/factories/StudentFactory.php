<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fullName = $this->faker->firstName().' '.$this->faker->lastName();

        return [
            'email' => $this->faker->email(),
            'password' => Hash::make('password'),
            'full_name' => $fullName,
            'department_id' => \App\Models\Department::factory(),
            'program_id' => \App\Models\Program::factory(),
            'year_level_id' => \App\Models\YearLevel::factory(),
        ];
    }
}
