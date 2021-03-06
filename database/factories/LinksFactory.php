<?php

namespace Database\Factories;

use App\Models\Links;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class LinksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Links::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->sentence(),
            'link' => $this->faker->url,
            'title' => $this->faker->word(),
            'category_id' => Category::all()->random()->id,

            //
        ];
    }
}
