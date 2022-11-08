<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category;
use App\Models\Subcategory;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = category::factory(5)->create();

        foreach ($categories as $category) {
            Subcategory::factory(5)->create([
                'category_id' => $category->id
            ]);
        }
    }
}
