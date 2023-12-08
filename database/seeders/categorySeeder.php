<?php

namespace Database\Seeders;




use App\Models\Category;
use Database\Factories\CategoryFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory(20)->create([
            'parent_id'=>0,

        ]);


    }
}
