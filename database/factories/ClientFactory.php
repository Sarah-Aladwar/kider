<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'profession' => fake()->jobTitle(),
            'testimony' => fake()->text(),
            'image' => fake()->randomElement(['testimonial-1.jpg','testimonial-2.jpg','testimonial-3.jpg']),
        ];
    }
}
