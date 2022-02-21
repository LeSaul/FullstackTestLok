<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Uuid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid'          =>  Uuid::uuid4(),
            'rate'          =>  random_int(1, 5),
            'comments'      =>  $this->faker->paragraph(),
            'name'          =>  $this->faker->firstName().' '.$this->faker->lastName() 
        ];
    }
}
