<?php

namespace Database\Factories;

use App\Models\StockExchange;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class StockExchangeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StockExchange::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement(['Gojek', 'Blizzard', 'OVO', 'Tesla', 'AWS', 'Azura Labs', 'Signal', 'Comma Ai', 'Theranos']),
            'buy' => $this->faker->numberBetween(100000, 1000000),
            'sell' => $this->faker->numberBetween(50000, 1000000),
            'lot' => $this->faker->numberBetween(1, 100)
        ];
    }
}
