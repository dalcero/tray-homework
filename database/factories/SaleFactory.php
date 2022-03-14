<?php

namespace Database\Factories;

use App\Models\Sale;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sale::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $total = $this->faker->numberBetween(100, 2000);
        return [
            'seller_id' => Seller::factory(),
            'total' => $total,
            'commission' => ($total * config('tray.commission')) / 100,
        ];
    }
}
