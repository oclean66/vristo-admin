<?php

namespace Database\Factories;

use App\Models\Currency;
use App\Models\Level;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'parent_id' => null,
            'code' => fake()->randomNumber(8, true),
            'title' => fake()->word(),
            'subtitle' => fake()->words(3, true),
            'country' => fake()->countryISOAlpha3(),
            'email' => fake()->email(),
            'document' => null,
            'address' => fake()->streetAddress(),
            'fullname' => fake()->words(3, true),
            'state' => fake()->randomElement([0, 1]),
            'phone' => fake()->phoneNumber(),
            'mobile' => fake()->e164PhoneNumber(),
            'currencies_id' => Currency::all()->random()->id,
            'levels_id' => Level::all()->random()->id,
        ];
    }
}
