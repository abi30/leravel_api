<?php

namespace Database\Factories\model;

use Illuminate\Database\Eloquent\Factories\Factory;
// use Faker\Generator as Faker;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'name'=>$this->faker->word,
            'from_brand'=>$this->faker->country,
            'stock'=>$this->faker->numberBetween(1,20),
            'price'=>$this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'paid'=>$this->faker->boolean,
            'details'=>$this->faker->paragraph

        ];
    }
}
