<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Use the factory() function provided by Laravel to generate dummy data
        House::factory()->count(24)->create();
    }
}
