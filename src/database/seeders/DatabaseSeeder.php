<?php

namespace Database\Seeders;

use App\Models\Favourite;
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
        \App\Models\Admin::factory(1)->create();
        \App\Models\Author::factory(10)->create();
        \App\Models\User::factory(20)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\Book::factory(30)->create();
        \App\Models\BookImage::factory(60)->create();
        \App\Models\Coupon::factory(10)->create();
        \App\Models\Favourite::factory(15)->create();
        \App\Models\Order::factory(15)->create();
        \App\Models\OrderDetail::factory(20)->create();
    }
}
