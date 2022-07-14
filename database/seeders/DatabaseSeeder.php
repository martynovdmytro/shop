<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Description;
use App\Models\Feature;
use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(6)
            ->has(Product::factory()
                ->hasAttached(Feature::factory()
                    ->has(Description::factory()))
                ->count(5))
            ->create();

    }
}
