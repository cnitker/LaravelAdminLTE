<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('backend.login.login');
    }

    //
    public function login(Request $request){


        if ($request->method() == 'POST'){

            $this->validate(\request(),[
                'name' => 'required',
                'password' =>'required|min:6'
            ]);
            $params =\request(['name','password']);
            $rememeber =boolval(\request('rememeber'));
            if (true == Auth::guard('admin')->attempt($params,$rememeber)){
                return redirect()->route('backend.main');
            }

            return redirect()->route('backend.login')->withErrors('用户名密码错误！');
        }

    }


    /**
     * 登出操作
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(){
        Auth::logout();
        return redirect(route('backend.login'));
    }
}
