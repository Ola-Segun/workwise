<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle,
            'tags' => implode(',', $this->faker->words(3)),
            'company' => $this->faker->company,
            'location' => $this->faker->city . ', ' . $this->faker->country,
            'email' => $this->faker->email,
            'website' => $this->faker->url,
            'description' => $this->faker->paragraphs(3, true),
        ];
    }
}
