<?php

namespace Database\Factories;

use App\Models\Employe;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Firstname'    => $this->faker->firstNameMale,
            'Secondname'   => $this->faker->lastName,
            'Area'         => $this->faker->jobTitle,
            'Salary'       => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'Keycode'      => $this->faker->ean8,
            'Email'        => $this->faker->freeEmail,
            'Phone'        => $this->faker->phoneNumber,
        ];
    }
}
