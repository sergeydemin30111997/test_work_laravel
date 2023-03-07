<?php

namespace Database\Factories\Request;

use App\Models\Product\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Request\Request>
 */
class RequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = Product::find(54)->type;
        $user_id = User::latest()->first()->id;
        return [
            'name' => fake()->name(),
            'user_id' => $user_id,
            'type_id' => $type->id,
            'min' => 1,
            'max' => 1000000,
        ];
    }
}
