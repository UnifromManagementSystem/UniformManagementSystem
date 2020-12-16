<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class UniformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = Product::all();
        return view('user.uniformlist', ['product' => Product::all()]);
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
        //날짜
        $val = date('Y-m-d H:i:s',strtotime ("+9 hours"));

        //전체가격
        $all_price = $request->get('order_count') * $request->get('order_price');

        //유저 세션정보
        $user = Auth::user();
     
        //echo $user["email"];

        //오더 테이블 입력
        $order = new Order;

        $order->order_count = $request->get('order_count');
        $order->order_situ = $request->get('order_situ');
        $order->deposit_situ = $request->get('deposit_situ');
        $order->order_price = $all_price;
        $order->order_date = $val;
        $order->id = $user["email"];
        $order->product_number = $request->get('product_number');

        $order->save();

        return redirect('/uniformlist');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.uniforminfo',  ['product' => Product::findOrFail($id)]);
        //return view('user.uniforminfo', compact('product'));
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
