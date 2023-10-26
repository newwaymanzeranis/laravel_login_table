<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use \App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserInformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'father_name' => fake()->word(),
            'mother_name' => fake()->word(),
            'mobile_no' => fake()->phoneNumber(),
            'address' => fake()->sentence(1),
            'user_id'=>User::all()->random()->id,
        ];
    }

}
