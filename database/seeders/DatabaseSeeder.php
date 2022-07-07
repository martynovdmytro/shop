<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\AttributeDescription;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttribute;
use Database\Factories\AttributeFactory;
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

        Category::factory(6)->create();

        Attribute::factory(10)
            ->has(Product::factory()
                ->count(3))
            ->create();

        AttributeDescription::factory()->count(30)->create();



    }
}
