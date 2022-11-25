<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\venta>
 */
class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'fecha'=>$this->faker->date(),
            'subtotal'=>$this->faker->numberBetween(1,1000),
            'total'=>$this->faker->numberBetween(1,1000),
        ];
    }
}
