<?php

namespace Database\Seeders;

use App\Models\CatLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CatLevel::create(['id' => 1 , 'name' => 'Preparatoria']);
        CatLevel::create(['id' => 2 , 'name' => 'Licenciatura']);
        CatLevel::create(['id' => 3 , 'name' => 'Postgrado']);
    }
}
