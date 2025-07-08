<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rooms = fake()->numberBetween(2, 10);
        return [
            'title' => fake()->sentence(6, true),
            'description' => fake()->paragraph(4 , true),
            'price' => fake()->numberBetween(100000, 1000000),
            'type' => fake()->randomElement(['Appartement', 'Maison', 'Chambre']),
            'surface' => fake()->numberBetween(20, 350),
            'rooms' => $rooms,
            'bedrooms' => fake()->numberBetween(1, $rooms),
            'bathrooms' => fake()->numberBetween(1, 9),
            'floor' => fake()->numberBetween(0, 20),
            'address' => fake()->address(),
            'postal_code' => fake()->postcode(),
            'city' => fake()->city(),
            'sold' => false
        ];
    }


    public function sold(): static
    {
        return $this->state(fn (array $attributes) => [
            'sold' => true,
        ]);
    }
}
