<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Product::truncate();
        ProductImage::truncate();

        User::factory()->count(10)->create();
        Product::factory()->count(30)->create();
        ProductImage::factory()->count(120)->create();

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
