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
            'product_name'=>'유니폼A',
            'product_image'=>NULL,
            'product_price'=>50000,
            'product_text'=>'유니폼A입니다.',
        ]);

        // 상품2
        DB::table('products')->insert([
            'product_name'=>'유니폼B',
            'product_image'=>NULL,
            'product_price'=>40000,
            'product_text'=>'유니폼B입니다.',
        ]);

        // 상품3
        DB::table('products')->insert([
            'product_name'=>'유니폼C',
            'product_image'=>NULL,
            'product_price'=>20000,
            'product_text'=>'유니폼C입니다.',
        ]);

        // 상품4
        DB::table('products')->insert([
            'product_name'=>'유니폼D',
            'product_image'=>NULL,
            'product_price'=>70000,
            'product_text'=>'유니폼D입니다.',
        ]);
    }
}
