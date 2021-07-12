<?php

namespace Database\Factories;

use App\Models\Notice;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoticeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'campus_id' => $this -> faker -> numberBetween($min = 1, $max = 4),
            // 'title' => $this -> faker -> sentence(10),
            // 'description' => $this -> faker -> sentence(20),
            // 'file' => $this -> faker -> file(),
        ];
    }
}
