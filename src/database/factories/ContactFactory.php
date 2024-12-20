<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

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
                'category_id' => $this->faker->numberBetween(1,5),
                'first_name' => $this->faker->firstName(),
                'last_name' =>$this->faker->lastName(),
                'gender' => $this->faker->numberBetween(1,3),
                'email' => $this->faker->unique()->safeEmail(),
                'tell' =>$this->faker->numberBetween(5,11),
                'address' => $this->faker->address(),
                'detail' =>$this->faker->realText(120)
        ];
    }
}
