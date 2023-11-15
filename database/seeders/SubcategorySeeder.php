<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Subcategory;


class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subcategory::create([
            'category_id' => 1,
            'name' => 'Oversize',
            'slug' => Str::slug('oversize'),
            'color' => true,
            'size' => '1'
        ]);

        Subcategory::create([
            'category_id' => 2,
            'name' => 'Canguro',
            'slug' => Str::slug('canguro'),
            'color' => true,
            'size' => '1'
        ]);
    }
}
