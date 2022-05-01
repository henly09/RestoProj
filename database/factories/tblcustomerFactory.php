<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tblcustomer>
 */
class tblcustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender=['Male','Female'];
        $status=['active','notactive'];
        
        return [
            'cust_Fname' => $this->faker->firstName,
            'cust_Lname' => $this->faker->lastName,
            'status' => $status[random_int(0,1)],
            'cust_Address' => $this->faker->address,
            'cust_Phone' => $this->faker->phoneNumber,
            'gender' => $gender[random_int(0,1)],
        ];
    }
}
