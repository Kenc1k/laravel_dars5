<?php

namespace Database\Factories;

use App\Models\Gurux;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gurux>
 */
class GuruxFactory extends Factory
{
    protected $model = Gurux::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'yunalish_id'=>rand(1,20),
            'name'=>$this->faker->lastName(),
            'kurs_id'=>rand(1,20),
        ];
    }
}
