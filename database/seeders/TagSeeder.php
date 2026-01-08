<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create(['name' => 'eléctrico']);
        Tag::create(['name' => 'comestible']);
        Tag::create(['name' => 'decorativo']);
        Tag::create(['name' => 'navidad']);
        Tag::create(['name' => 'halloween']);
        Tag::create(['name' => 'premium']);
    }
}
