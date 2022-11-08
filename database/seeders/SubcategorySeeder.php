<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategory::create([
            'name'=>'Desarrollo web'
        ]);

        Subcategory::create([
            'name'=>'Diseño web'
        ]);

        Subcategory::create([
            'name'=>'Programacion'
        ]);
    }
}
