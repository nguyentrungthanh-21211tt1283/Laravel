<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categories")->insert([
            [
                'name_categorie' => 'Điện tử',
                'description_categorie' => 'Các sản phẩm điện tử như điện thoại, máy tính.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_categorie' => 'Thời trang',
                'description_categorie' => 'Quần áo, giày dép và phụ kiện thời trang.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_categorie' => 'Thực phẩm',
                'description_categorie' => 'Các loại thực phẩm, đồ uống và gia vị.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}