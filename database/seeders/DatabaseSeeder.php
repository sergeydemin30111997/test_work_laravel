<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product\Type;
use App\Models\Request\Request;
use Database\Factories\TypeFactory;
use Illuminate\Database\Seeder;
use App\Models\Product\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();
//        Type::factory(2)->create();
//        Product::factory(10)->create();
//        Request::factory(10)->create();
        \App\Models\Product\Type::factory()->create([
            'name' => 'новый',
        ]);
        \App\Models\Product\Type::factory()->create([
            'name' => 'б/у',
        ]);
    }
}
