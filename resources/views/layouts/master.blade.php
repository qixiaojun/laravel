@section('header')
@show{{-- 头部申明区域 --}}
<!DOCTYPE html>
<html lang="zh-hans">
<head>
    <meta charset="UTF-8">
    <title>App Name - @yield('title')</title>
    <meta name="description" content="{{ Cache::get('website_keywords') }}" />
    <meta name="keywords" content="{{ Cache::get('website_keywords') }}" />
    <meta name="author" content="{{ Cache::get('website_author') }}" />
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
@section('meta')
@show{{-- 添加一些额外的META申明 --}}
    <link rel="shortcut icon" href="/asset/favicon.ico" type="image/x-icon">
    @section('css')
    @show{{-- head区域css样式表 --}}

    @section('style')
    @show{{-- head区域内联css样式表 --}}

</head>
<body @section('body_attr')class=""@show>
{{--  id="example" class="started" ontouchstart="" 追加类ID属性--}}
@section('content')
@show{{--内容 --}}
    @section('topnav')
    @show{{--头部导航 --}}

    @section('leftnav')
    @show{{-- 左侧导航 --}}

    @section('main')
    @show{{-- 主体部分--}}

    @section('js')
    @show{{-- body区域javscript脚本 --}}
</body>
</html>
@section('footer')
@show{{-- 尾部申明区域 --}}
