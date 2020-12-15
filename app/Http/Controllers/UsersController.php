<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class UsersController extends Controller
{
    public function store(Request $request){


        // request값 유효성 검사
        // $this->validate($request,[
        //     'name'=>'required|max:255',
        //     'email'=>'required|email|max:255|unique:users',
        //     'address'=>'required|max:255',
        //     'password'=>'required|confirmed|min:6'
        // ]);

    
        // 데이터베이스에 저장
        $user=\App\Models\User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'address'=>$request->input('address'),
            'password'=>bcrypt($request->input('password')),
        ]);

        // 생성한 사용자 객체로 로그인
        auth()->login($user);


        return redirect('/');


    }
}
