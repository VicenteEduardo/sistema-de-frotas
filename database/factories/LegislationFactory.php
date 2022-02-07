<?php

namespace Database\Factories;

use App\Models\Legislation;
use Illuminate\Database\Eloquent\Factories\Factory;

class LegislationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Legislation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'legislation' => "Aqui vai o a legislação",
            'title' => "titulo"
        ];
    }
}
