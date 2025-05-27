<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 40; $i++) {
            DB::table('articles')->insert([
                'name' => 'Artículo ' . ($i + 1),
                'description' => Str::random(15),
                'price' => mt_rand(100, 99999) / 100, // entre 1.00 y 999.99
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
