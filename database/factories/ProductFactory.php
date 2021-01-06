<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker-> name,
            'detail' => $this->faker-> sentence(5),
            'price' => $this->faker-> randomNumber(2),
            'stock' => $this->faker-> randomNumber(2),
            'discount' => $this->faker-> randomNumber((2))
        ];
    }
}
