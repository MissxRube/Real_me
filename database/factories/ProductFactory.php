<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker;
use Carbon\Carbon;

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
        $faker = Faker\Factory::create('zh_TW');

        return [
            'title' => $faker->name,
            // 'slug'=>$faker->sentence($nbWords=3),
            'price' => $faker->numberBetween(300, 10000),
            'desc' => $faker->realText(50),
            'enabled' => rand(0, 1),
            'sell_at' => Carbon::now()->addDays($faker->numberBetween(-50, 50)),
            'cgy_id' => rand(1, 4),
            'pic' => '',
            'options' => '',
        ];
    }
}
