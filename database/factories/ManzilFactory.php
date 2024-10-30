<?php

namespace Database\Factories;

use App\Models\Manzil;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manzil>
 */
class ManzilFactory extends Factory
{
    protected $model = Manzil::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->country(),
        ];
    }
}
