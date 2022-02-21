<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\Address;
use App\Models\Contact;
use App\Models\Rating;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::factory()->count(250)
                        ->hasAddress(1)
                        ->hasContact(1)
                        ->hasRatings(3)
                        ->create();
    }
}
