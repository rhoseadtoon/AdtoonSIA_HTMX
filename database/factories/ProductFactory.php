<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'imgUrl' => fake()->randomElement(['https://cloudinary.images-iherb.com/image/upload/f_auto,q_auto:eco/images/dve/dve03479/y/8.jpg',
            'https://beautyscout.ph/wp-content/uploads/2023/04/Lotion-for-Her-250ml-1.jpg',
            'https://the-fragrance-shop.imgix.net/products/27617---new.jpg',
            'https://m.media-amazon.com/images/I/815PK4QNjlL._AC_UF1000,1000_QL80_.jpg',
            'https://assets.unileversolutions.com/v1/123385677.png',
            'https://static.beautytocare.com/cdn-cgi/image/width=1600,height=1600,f=auto/media/catalog/product//h/-/h-s-menthol-fresh-shampoo-340ml.jpg']),
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'price' =>fake()->numberBetween(5000,10000)
        ];
    }
}
