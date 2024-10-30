<?php

namespace Database\Factories;

use App\Models\Fakulty;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fakulty>
 */
class FakultyFactory extends Factory
{
    protected $model = Fakulty::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->word(),
            'university_id'=>rand(1,20),
        ];
    }
}
