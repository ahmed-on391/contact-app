<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use  App\Models\Business;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => fake()->firstName(),

            'lastname' => fake()->lastName(),
            
            'email' => fake()->unique()->safeEmail(),
            
            'phone' => fake()->phoneNumber(),

            'business_id' => \App\Models\Business::factory()->create(), 

           
        ];
    }
}