<?php

namespace Database\Seeders;

use App\Models\TextPost;
use Illuminate\Database\Seeder;

class TextPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TextPost::factory(1)->create();
    }
}
