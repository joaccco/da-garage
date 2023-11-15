<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Remeras',
            'slug' => Str::slug('remeras'),
            'icon' => '<i class="fa-solid fa-shirt"></i>',
        ]);

        Category::create([
            'name' => 'Buzos',
            'slug' => Str::slug('buzos'),
            'icon' => '<i class="fa-solid fa-shirt"></i>',
            
        ]);
    }
}
