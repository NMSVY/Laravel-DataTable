<?php

namespace Database\Factories;

use App\Models\TableData;
use Illuminate\Database\Eloquent\Factories\Factory;

class TableDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TableData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'mobile' => rand('1111111111','9999999999'),

        ];
    }
}
