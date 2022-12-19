<?php

namespace Database\Factories;
use Faker\Provider\id_ID\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => $this->faker->date($max='now'),
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
            'birth_date' => $this->faker->dateTimeThisCentury()->format('Y-m-d'),
            'birth_place' => $this->faker->city(),
            'gender' => $this->faker->randomElement(['male', 'female'])
        ];
    }
}
