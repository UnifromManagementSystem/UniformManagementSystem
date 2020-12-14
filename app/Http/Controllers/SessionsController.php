<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function __consturct()
    {
        $this->middleware('guest',['except'=>'destroy']);
    }

    

    public function store(Request $request){
        

        // $this->validate($request,[
        //     'email'=>'required|email',
        //     'password'=>'required|min:6',
        // ]);

        

        $credentials = $request->only('email', 'password');

        if (! Auth::attempt($credentials)) {
            return back()->withInput();
        }
        

        // 권한 데이터 가져오기
        $user=\App\Models\User::whereemail($request->input('email'))->first();

        

        if($user->role==1){
            return redirect()->intended('/uniformlist');
        }else{
            return redirect()->intended('/orderlist');
        }

    
    }


}
