<?php

namespace Database\Factories;

use App\Models\Part;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Part::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name'        => $this->faker->word,
            'Mark'        => $this->faker->word,
            'Model'       => $this->faker->word,
            'Price'       => $this->faker->word,
            'Description' => $this->faker->text($maxNbChars = 200),
            'Comentary'   => $this->faker->text($maxNbChars = 100), 
            'Available'   => $this->faker->randomDigitNot(2,3,4,5,6,7,8,9),
        ];
    }
}
