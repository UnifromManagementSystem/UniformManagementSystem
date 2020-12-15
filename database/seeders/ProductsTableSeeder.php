<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 상품1
        DB::table('products')->insert([
            'product_name'=>'ユニフォームＡ',
            'product_image'=>'1.jpg',
            'product_price'=>300,
            'product_text'=>'ユニフォームＡです。',
        ]);

        // 상품2
        DB::table('products')->insert([
            'product_name'=>'ユニフォームＢ',
            'product_image'=>'2.jpg',
            'product_price'=>400,
            'product_text'=>'ユニフォームＢです。',
        ]);

        // 상품3
        DB::table('products')->insert([
            'product_name'=>'ユニフォームＣ',
            'product_image'=>'3.jpg',
            'product_price'=>500,
            'product_text'=>'ユニフォームＣです。',
        ]);

        // 상품4
        DB::table('products')->insert([
            'product_name'=>'ユニフォームＤ',
            'product_image'=>'4.jpg',
            'product_price'=>600,
            'product_text'=>'ユニフォームＤです。',
        ]);

        // 상품5
        DB::table('products')->insert([
            'product_name'=>'ユニフォームＥ',
            'product_image'=>'5.jpg',
            'product_price'=>700,
            'product_text'=>'ユニフォームＥです。',
        ]);


    }
}
