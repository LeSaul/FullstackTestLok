<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Uuid;
use App\Models\Restaurant;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
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
            'restaurant_id' =>  Restaurant::factory(),
            'street'        => $this->faker->streetAddress,
            'city'          =>  $this->faker->city(),
            'state'         =>  $this->faker->state(),
            'location'      =>  json_encode([
                'lat'   =>  $this->faker->latitude,
                'long'  =>  $this->faker->longitude
            ])
        ];
    }
}
