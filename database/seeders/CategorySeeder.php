<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'イタリアン'
        ];
        Category::create($param);
        $param = [
            'name' => 'ラーメン'
        ];
        Category::create($param);
        $param = [
            'name' => '居酒屋'
        ];
        Category::create($param);
        $param = [
            'name' => '寿司'
        ];
        Category::create($param);
        $param = [
            'name' => '焼肉'
        ];
        Category::create($param);
    }
}
