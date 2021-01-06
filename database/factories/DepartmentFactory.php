<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Department::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            /**
             * build the following data into the field
             * As stated below
             */
            'name' => $this->faker -> name,
            'descriptions' => $this->faker-> sentence(4),
        ];
    }
}
