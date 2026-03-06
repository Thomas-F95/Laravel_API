<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
             return [
            'nome_prodotti' => fake()->name(),
            'marca_prodotti' => fake()->company(),
            'descrizione' => fake()->paragraph(),
            'prezzo' => fake()->randomDigit(),
            'immagine_prodotti' => fake()->imageUrl(640, 480, 'animals', true),
    
        ];
    }
}
