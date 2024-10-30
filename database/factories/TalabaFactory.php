<?php

namespace Database\Factories;

use App\Models\Talaba;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Talaba>
 */
class TalabaFactory extends Factory
{
    protected $model = Talaba::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'gurux_id'=>rand(1,20),
            'phone'=>$this->faker->phoneNumber(),
            'manzil_id'=>rand(1,20),
        ];
    }
}
