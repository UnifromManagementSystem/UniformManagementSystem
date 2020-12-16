<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // 주문1
        DB::table('orders')->insert([
            'order_count'=>2,
            'order_situ'=>'Waiting',
            'deposit_situ'=>'Waiting',
            'order_price'=>50000,
            'order_date'=>'2020-12-10',
            'id'=>1,
            'product_number'=>1
        ]);

        // 주문2
        DB::table('orders')->insert([
            'order_count'=>3,
            'order_situ'=>'Completed',
            'deposit_situ'=>'Waiting',
            'order_price'=>50000,
            'order_date'=>'2020-12-15',
            'id'=>1,
            'product_number'=>2
        ]);

        // 주문3
            DB::table('orders')->insert([
            'order_count'=>5,
            'order_situ'=>'Completed',
            'deposit_situ'=>'Completed',
            'order_price'=>50000,
            'order_date'=>'2020-11-13',
            'id'=>2,
            'product_number'=>1
        ]);

        // 주문4
        DB::table('orders')->insert([
            'order_count'=>4,
            'order_situ'=>'Waiting',
            'deposit_situ'=>'Waiting',
            'order_price'=>50000,
            'order_date'=>'2020-11-20',
            'id'=>1,
            'product_number'=>3
        ]);
    }
}
