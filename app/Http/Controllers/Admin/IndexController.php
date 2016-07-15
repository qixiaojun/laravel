<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class IndexController extends CommonController
{
    public function index()
    {
      // return view('admin.login');
      return 12;
    }

    public function info()
    {
        return view('admin.info');
    }

    //修改超级管理员密码
    public function chpwd()
    {
        if($input = Input::all()){

            $rules = [
                'password'=>'required|between:6,20|confirmed',
            ];

            $message = [
                'password.required'=>'新密码不能为空！',
                'password.between'=>'新密码必须在6-20位之间！',
                'password.confirmed'=>'新密码和确认密码不一致！',
            ];

            $validator = Validator::make($input,$rules,$message);

            if($validator->passes()){
                $user = User::first();
                $_password = Crypt::decrypt($user->passwrod);
                if($input['password_o']==$_password){
                    $user->passwrod = Crypt::encrypt($input['password']);
                    $user->update();
                    return back()->with('errors','密码修改成功！');
                }else{
                    return back()->with('errors','原密码错误！');
                }
            }else{
//                echo 'no';
//                dd($validator->errors()->all());
//                $errors = $validator->errors()->all();
                return back()->withErrors($validator);
//                dd($errors);
//                return view('admin.chpwd',$errors);
            }

        }else{
            return view('admin.chpwd');
        }
    }
}
