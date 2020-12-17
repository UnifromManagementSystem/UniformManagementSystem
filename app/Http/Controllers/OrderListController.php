<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class OrderListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$data2 = DB::table('orders')->get();
        $data = DB::table('orders')
        ->join('users','users.email', '=', 'orders.id')
        ->join('products','products.product_number', '=', 'orders.product_number')
        ->select('orders.*', 'users.*', 'products.product_name')
        ->get();

        //지난 달 매출
        $LastSales=0;
        //이번 달 매출
        $NowSales=0;

        //저번 달 발주된 상품들만 가져오기
        $fromDate = date('2020-11-1');
        $toDate = date('2020-12-1');
        $LastItems=\App\Models\Order::whereBetween('order_date', [$fromDate, $toDate])->get();
        
        
        //이번 달 발주된 상품들만 가져오기  
        $from = date('2020-12-1');
        $to = date('2020-12-31');
        $NowItems=\App\Models\Order::whereBetween('order_date', [$from, $to])->get();

        
        
        //이번 달 발주된 상품들 가격 계산
        foreach ($NowItems as $value) {
            if($value->order_situ=='Completed'){
                $NowSales += $value->order_price;
            }
         }

         //저번 달 발주된 상품들 가격 계산
        foreach ($LastItems as $value) {
            if($value->order_situ=='Completed'){
                $LastSales += $value->order_price;
            }
         }
<<<<<<< HEAD
=======

         
>>>>>>> 1af314e0f9e912a7dbd21c32cee728e0d0c2017e

         $data = DB::table('orders')
         ->join('users','users.email', '=', 'orders.id')
         ->join('products','products.product_number', '=', 'orders.product_number')
         ->select('orders.*', 'users.*', 'products.product_name')
         ->get();
        
        
        return view('admin.orderlist',['data'=>$data,'NowSales'=>$NowSales,'LastSales'=>$LastSales]);
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
        //우선 유저 row 가져오기 id = email
        // $users = DB::table('orders')->where('id', $request->id);
        // //한 email에 여러가지 구매목록이 나오니 주문번호 확인 
        // $users2 = DB::table('orders')->where('order_number', $request->order_number)
        // ->union($users)->get();

        Mail::to($request->id)->send(new OrderShipped());
        
        $form_data = [
            'order_situ' => $request->order_situ,
            'deposit_situ' => $request->deposit_situ
        ];

        $affected = DB::table('orders')
                    ->where('order_number', $request->order_number)
                    ->update($form_data);

        return response()->json([], 204);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('orders')
        ->join('products','products.product_number', '=', 'orders.product_number')
        ->select('orders.*', 'products.product_name')
        ->get();
        
        return view('admin.orderlist',['data'=>$data]);
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
        // dd($request);
        // $col = Order::where('id', $id)->first();
        // dd($col);
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
