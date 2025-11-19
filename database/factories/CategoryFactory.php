<?php
// database/factories/CategoryFactory.php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    public function definition()
    {
        $colors = ['#007bff', '#28a745', '#dc3545', '#ffc107', '#6f42c1'];
        
        return [
            'name' => $this->faker->word(),
            'color' => $this->faker->randomElement($colors),
        ];
    }
}