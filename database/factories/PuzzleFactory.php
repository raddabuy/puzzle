<?php

namespace Database\Factories;

use App\Models\Puzzle;
use Illuminate\Database\Eloquent\Factories\Factory;

class PuzzleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Puzzle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->sentence,
            'details' =>100*random_int(10,20)
        ];
    }
}
