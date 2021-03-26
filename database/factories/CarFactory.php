<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand'           => $this->faker->company,
            'model'           => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'color'           => $this->faker->safeColorName,   
            'serialNumber'    => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'matricule'       => $this->faker->randomLetter, 
            'numberDoors'     => $this->faker->randomDigit, 
            'numberChair'     => $this->faker->randomDigit, 
            'mileage'         => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'numberCylenders' => $this->faker->randomDigit,
            'description'     => $this->faker->text($maxNbChars = 100),
            'comentary'       => $this->faker->text($maxNbChars = 100),
            'available'       => $this->faker->randomDigitNot(2,3,4,5,6,7,8,9),
        ];
    }
}
