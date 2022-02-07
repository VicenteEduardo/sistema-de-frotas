<?php

namespace Database\Factories;

use App\Models\President;
use Illuminate\Database\Eloquent\Factories\Factory;

class PresidentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = President::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => "A que vai o titulo",
            'information' => " a que vai as informações do presidente"
        ];
    }
}
