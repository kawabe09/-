<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

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
            'first_name' => $this->faker->first_name,
            'last_name' => $this->faker->last_name,
            'gender' => $this->faker->gender,
            'email' => $this->faker->email,
            'tel' => $this->faker->tel,
            'address' => $this->faker->address,
            'building' => $this->faker->text(0,50),
            'category_id' => $this->faker->numberBetween(1,5),
            'detail' => $this->faker->text(1,120),
        ];
    }
}
