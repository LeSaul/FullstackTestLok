<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Uuid;
use App\Models\Restaurant;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
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
            'site'          =>  'https://'.$this->faker->safeEmailDomain(),
            'email'         =>  $this->faker->freeEmail(),
            'phone'         =>  $this->faker->tollFreePhoneNumber(),
        ];
    }
}
