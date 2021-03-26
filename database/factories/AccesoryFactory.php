<?php

namespace Database\Factories;

use App\Models\Accesory;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccesoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Accesory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name'        => $this->faker->word,
            'Model'       => $this->faker->randomLetter,
            'Numserie'    => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'Price'       => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'State'       => $this->faker->word,
            'Comentary'   => $this->faker->text($maxNbChars = 100),
            'Available'   => $this->faker->randomDigitNot(2,3,4,5,6,7,8,9),
            'Date'        => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'Time'        => $this->faker->time($format = 'H:i:s', $max = 'now'),

        ];
    }
}
