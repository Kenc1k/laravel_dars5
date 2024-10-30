<?php

namespace Database\Factories;

use App\Models\Yunalish;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Yunalish>
 */
class YunalishFactory extends Factory
{
    protected $model = Yunalish::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->word(),
            'faculty_id'=>rand(1,20),
        ];
    }
}
