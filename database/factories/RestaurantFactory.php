<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Uuid;
use App\Models\Contact;
use App\Models\Address;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
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
            'name'          =>  $this->faker->company(),
            // 'contact_id'    =>  Contact::factory(),
            // 'address_id'    =>  Address::factory()
        ];
    }
}
