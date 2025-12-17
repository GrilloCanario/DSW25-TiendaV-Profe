<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "name" => "Electrónica",
            "description" => "Aparatos electrónicos y otros chismes"
        ]);
        Category::create([
            "name" => "Hogar",
            "description" => "Almohadas y edredones."
        ]);
        Category::create([
            "name" => "Comestibles",
            "description" => "Comidas y bebidas"
        ]);
        
    }
}
