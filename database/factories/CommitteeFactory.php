<?php

namespace Database\Factories;

use App\Models\Committee;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommitteeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Committee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'campus_id' => $this -> faker -> numberBetween($min = 1, $max = 5),
            'name' => $this -> faker -> name(),
            'position' => $this -> faker -> numberBetween($min = 1, $max = 20),
            'designation' => $this -> faker -> sentence(2),
            'session' =>' 2020 -  2022',
        ];
    }
}
