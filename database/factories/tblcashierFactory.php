<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tblcashier>
 */
class tblcashierFactory extends Factory
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
            'First_Name' => $this->faker->firstName,
            'Last_Name' => $this->faker->lastName,
            'username' => $this->faker->username,
            'password' => $this->faker->password,
            'status' => $status[random_int(0,1)],
            'Address' => $this->faker->address,
            'Phone_no'=> $this->faker->phoneNumber,
            'Email'=> $this->faker->email,
            'gender'=> $gender[random_int(0,1)],
        ];
    }
}
