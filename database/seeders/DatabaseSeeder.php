<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\AreaSeeder;
use Database\Seeders\ShopSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this
        ->call([
            ShopSeeder::class,
            AreaSeeder::class,
            CategorySeeder::class,
        ]);
    }
}
