<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'link' =>  $this->faker->url(),
            'linkCode' => $this->faker->word(5 , false),
        ];
    }
}
