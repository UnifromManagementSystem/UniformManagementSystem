<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // //지난 달 매출
        // $LastSales=0;
        // //이번 달 매출
        // $NowSales=0;

        // //저번 달 발주된 상품들만 가져오기
        // $fromDate = date('2020-11-10');
        // $toDate = date('2020-11-31');
        // $LastItems=\App\Models\Order::whereBetween('order_date', [$fromDate, $toDate])->get();


        // dd($LastItems);

        
        
        // //이번 달 발주된 상품들만 가져오기  
        // $from = date('2020-12-1');
        // $to = date('2020-12-31');
        // $NowItems=\App\Models\Order::whereBetween('order_date', [$from, $to])->get();

        // //이번 달 발주된 상품들 가격 계산
        // foreach ($NowItems as $value) {
        //     $NowSales += $value->order_price;
        //  }



         
        //  //저번 달 발주된 상품들 가격 계산
        // foreach ($LastItems as $value) {
        //     $LastSales += $value->order_price;
        //  }


         


        $data = DB::table('orders')
        ->join('users','users.id', '=', 'orders.id')
        ->join('products','products.product_number', '=', 'orders.product_number')
        ->select('orders.*', 'users.name', 'products.product_name')
        ->get();
        return view('admin.orderlist',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
