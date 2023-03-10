<?php

namespace Database\Seeders;

use App\Models\CatGender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatGenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CatGender::create(['id' => 1 , 'name' => 'Masculino']);
        CatGender::create(['id' => 2 , 'name' => 'Femenino']);
    }
}
