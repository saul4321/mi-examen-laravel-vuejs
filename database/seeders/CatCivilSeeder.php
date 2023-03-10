<?php

namespace Database\Seeders;

use App\Models\CatCivil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CatCivil::create(['id' => 1 , 'name' => 'Soltero']);
        CatCivil::create(['id' => 2 , 'name' => 'Casado']);
        CatCivil::create(['id' => 3 , 'name' => 'Divorsiado']);
        CatCivil::create(['id' => 4 , 'name' => 'Viudo']);
    }
}
