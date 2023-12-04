<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    // protected $model = Listing::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(10),
            'tags' => 'laravel,Api,Javascript',
            'company' => $this->faker->sentence(3),
            'email' => $this->faker->safeEmail(),
            'website' => $this->faker->url(),
            'location' => 'Dhaka',
            'description' => $this->faker->sentence(),
        ];
    }
}
