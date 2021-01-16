<?php

namespace Database\Factories;

use App\Models\Cgy;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker;

class CgyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cgy::class;

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
            //'viedo'=>image('public/storage/index', 300, 350, 'ocean', false),
            'topproductname' =>$faker->realText(20),
            'topproducttag' =>$faker->realText(30),
            'topproductpic' => $faker->image('public/storage/index', 300, 350, 'ocean', false),
            'topproducturl'=> $faker->url,
            'peoplename'=>$faker->name,
            'peopledesc'=> $faker->realText(80),
            'peoplepic'=>$faker->image('public/storage/index', 300, 350, 'ocean', false),
            'Demachydesc'=> $faker->realText(80),
            'bannerpic' => $faker->image('public/storage/index', 300, 350, 'ocean', false),
            'productpic'=>$faker->image('public/storage/index', 300, 350, 'ocean', false),
            'productname' =>$faker->realText(20),
            'producturl'=> $faker->url,
            'richness'=>$faker->numberBetween(1,5),
            'price'=>$faker->numberBetween(1000,3000), 
            'desc' => $faker->realText(50),
            'enabled' => 1,
            'sort' => rand(0, 5)
        ];
    }
}
