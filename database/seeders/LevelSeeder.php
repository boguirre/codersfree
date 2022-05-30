<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        level::create([
            'name'=>'Nivel Basico'
        ]);

        level::create([
            'name'=>'Nivel Intermedio'
        ]);

        level::create([
            'name'=>'Nivel Avanzado'
        ]);
    }
}
