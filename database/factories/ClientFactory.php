<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Firstname'  => $this->faker->firstNameFemale, 
            'Secondname' => $this->faker->lastName,
            'Address'    => $this->faker->address,
            'Job'        => $this->faker->jobTitle,
            'Salary'     => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'Bank'       => $this->faker->creditCardType,
            'Numcount'   => $this->faker->creditCardNumber,
            'Phone'      => $this->faker->phoneNumber,
            'Email'      => $this->faker->freeEmail,
        ];
    }
}
