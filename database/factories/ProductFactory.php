<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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

        $name = $this->faker->sentence(2);
        $subcategory = Subcategory::all()->random();
        $category = $subcategory->category;
        $brands = $category->brands->random();
        $quantity = ($subcategory->color) ? null : 15;

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement([19.990, 49.990, 99.000]),
            'subcategory_id' => $subcategory->id,
            'brand_id' => $brands,
            'quantity' => $quantity,
            'status' => 2
        ];
    }
}
