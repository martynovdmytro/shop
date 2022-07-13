<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\AttributeDescription;
use App\Models\Category;
use App\Models\Description;
use App\Models\Feature;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\User;
use Database\Factories\AttributeFactory;
use Database\Factories\DescriptionFactory;
use Database\Factories\ProductAttributeFactory;
use Database\Factories\ProductFactory;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\Int_;

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
