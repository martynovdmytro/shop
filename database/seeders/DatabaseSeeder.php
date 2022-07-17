<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Category;
use App\Models\Description;
use App\Models\Feature;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
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
        User::factory(10)->create();

        Category::factory(6)
            ->has(Product::factory()
                ->hasAttached(Order::factory()
                    ->has(Address::factory()))
                ->hasAttached(Feature::factory()
                    ->has(Description::factory()))
                ->count(5))
            ->create();

    }
}
