<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\course>
 */
class courseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'id'=>fake()->unique->integer(),
            'name'=>fake()->unique->name(),
            'description'=>fake()->unique->text(),
            'grade'=>fake()->unique->numberBetween(50, 100),
            'instractor'=>fake()->unique->name(),


        ];
    }
}
