<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_tag')->insert([
            ['product_id' => 1, 'tag_id' => 1],
            ['product_id' => 1, 'tag_id' => 6],
            ['product_id' => 2, 'tag_id' => 3],
        ]);
    }
}
