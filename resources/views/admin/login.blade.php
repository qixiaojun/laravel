@extends('layouts.admin')
@section('body_attr')style="background:#F3F3F4;"@stop
@section('content')
<div class="login_box">
      <h1>Blog</h1>
      <h2>欢迎使用博客管理平台</h2>
      <div class="form">
        @if(session('msg'))
          <p style="color:red">{{session('msg')}}</p>
        @endif
        <form action="{{url('admin/login')}}" method="post">
          {{csrf_field()}}
          <ul>
            <li class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="text" name="username" class="text"/>
              @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
              <span><i class="fa fa-user"></i></span>
            </li>
            <li>
              <input type="password" name="password" class="text"/>
              <span><i class="fa fa-lock"></i></span>
            </li>
            <li>
              <input type="text" class="code" name="code"/>
              <span><i class="fa fa-check-square-o"></i></span>
              <img style="cursor: pointer;" src="{{captcha_src()}}" onclick="this.src='{{captcha_src()}}' + Math.random()">
              <!-- <img src="{{url('admin/code')}}" alt="" onclick="this.src='{{url('admin/code')}}?'+Math.random()"> -->
            </li>
            <li>
              <input type="submit" value="立即登录"/>
            </li>
          </ul>
        </form>
        <p><a href="{{url('home/index')}}">返回首页</a> &copy; 2016 Powered by laravel </p>
      </div>
    </div>
@endsection
