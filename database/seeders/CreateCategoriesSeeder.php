<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
               'name'=>'Pizza',
               'status'=>1,
            ],
            [
                'name'=>'Burger',
                'status'=>1,
             ],
             [
                'name'=>'Dessert',
                'status'=>1,
             ],
             [
                'name'=>'Soft Drinks',
                'status'=>1,
             ],
            
        ];

        foreach ($categories as $key => $category) {
            category::create($category);
        }
    }
}
