<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 101; $i++) {
            DB::table('products')->insert([
                'code'=> Str::random(4),
                'name'=> Str::random(50),
                'ammount' => rand(50,100),
                'unit' => 'Un',
            ]);
        }
    }
}
