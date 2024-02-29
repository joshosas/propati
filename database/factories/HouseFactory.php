<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\House;
use Illuminate\Database\Eloquent\Factories\Factory;

class HouseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = House::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Get all user IDs
        $userIds = User::pluck('id')->toArray();
        return [
            'user_id' => $this->faker->randomElement($userIds),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(10000, 1000000),
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'zip_code' => $this->faker->postcode,
            'bedrooms' => $this->faker->numberBetween(1, 5),
            'bathrooms' => $this->faker->numberBetween(1, 3),
            'square_footage' => $this->faker->numberBetween(500, 5000),
            'lot_size' => $this->faker->numberBetween(1000, 10000),
            'year_built' => $this->faker->numberBetween(1950, 2022),
            'property_type' => $this->faker->randomElement(['Apartment', 'Office', 'Shop', 'Land']),
            'sale_rent' => $this->faker->randomElement(['Sale', 'Rent']),
            'amenities' => $this->faker->sentence(5),
            'contact_name' => $this->faker->name,
            'contact_email' => $this->faker->email,
            'contact_phone' => $this->faker->phoneNumber,
            'additional_details' => $this->faker->paragraph
            // 'image' => $this->faker->imageUrl()
        ];
    }
}
