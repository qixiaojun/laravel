@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{asset('asset/css/admin.css')}}" media="screen" charset="utf-8">
{{--    <link rel="stylesheet" href="{{asset('org/semantic/semantic.css')}}" media="screen" charset="utf-8">--}}
    <link rel="stylesheet" href="{{asset('org/fa/css/font-awesome.min.css')}}" media="screen" charset="utf-8">
{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
@stop

@section('body')
@section('body_attr')id="app-layout"@stop
@yield('content')
@section('js')
<script src="{{asset('asset/js/jquery-3.0.0.min.js')}}" charset="utf-8"></script>
    {{--<script src="{{asset('org/semantic/semantic.min.js')}}" charset="utf-8"></script>--}}
@section('custom')
@show

@stop{{-- body区域javscript脚本 --}}
@stop

@section('footer')
@stop{{-- 尾部申明区域 --}}
