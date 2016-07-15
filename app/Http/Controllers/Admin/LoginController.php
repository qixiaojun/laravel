<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;

// require_once '../../../htdocs/laravel/public/org/code/Code.class.php';

class LoginController extends CommonController
{
    //登录表单和登录验证
    public function login(Request $request)
    {
        if($input = $request->all()){
            // $code = new \Code;
            // $_code = $code->get();
            // if(strtoupper($input['code'])!= $_code){
            //     return back()->with('msg','验证码错误！');
            // }
            $user = User::first();
//            dd(Crypt::encrypt('admin'));
//            if($user->username != $input['username'] || Crypt::decrypt($user->password)!= $input['password']){
//                return back()->with('msg','用户名或者密码错误！');
//            }
            session(['user'=>$user]);
            return redirect('admin/index');
        }else {
            session(['user'=>null]);
            return view('admin.login');
        }
    }

    //生成验证码
    public function code()
    {
        $code = new \Code;
        $code->make();
    }

    //退出登录
    public function logout()
    {
        session(['user'=>null]);
        return redirect('admin/login');
    }

    //验证码取值
    public function getcode()
    {
        $code = new \Code;
        return $code->get();
    }

    public function captcha()
    {
        return captcha();
    }
}
