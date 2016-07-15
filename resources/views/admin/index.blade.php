@extends('layouts.master')
@section('title', 'Page Title')
@section('css')
    <link rel="stylesheet" href="{{asset('org/fa/css/font-awesome.min.css')}}" media="screen" charset="utf-8">
    <link rel="stylesheet" href="{{asset('asset/css/drupal/html.css')}}" media="screen" charset="utf-8">
    <link rel="stylesheet" href="{{asset('asset/css/drupal/toolbar.css')}}" media="screen" charset="utf-8">
    <link rel="stylesheet" href="{{asset('asset/css/drupal/ui.css')}}" media="screen" charset="utf-8">
    <link rel="stylesheet" href="{{asset('asset/css/drupal/body.css')}}" media="screen" charset="utf-8">
    <link rel="stylesheet" href="{{asset('asset/css/drupal/dp.css')}}" media="screen" charset="utf-8">
@endsection
@section('body_attr')class="user-logged-in path-admin toolbar-vertical toolbar-tray-open toolbar-fixed"@stop
<!--头部导航 开始-->
@section('topnav')
    @include('admin.topnav')
@endsection
<!--头部导航 结束-->

<!--左侧导航 开始-->
@section('leftnav')
    @include('admin.leftnav')
@endsection
<!--左侧导航 结束-->

<!--主体部分 开始-->
@section('main')
    @include('admin.main')
@endsection
<!--主体部分 结束-->
@section('js')
    <script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"admin\/index","currentPathIsAdmin":true,"isFront":false,"currentLanguage":"zh-hans"},"pluralDelimiter":"\u0003","ajaxPageState":{"libraries":"classy\/base,classy\/messages,contextual\/drupal.contextual-links,contextual\/drupal.contextual-toolbar,core\/drupal.active-link,core\/html5shiv,core\/normalize,seven\/drupal.nav-tabs,seven\/global-styling,shortcut\/drupal.shortcut,toolbar\/toolbar,toolbar\/toolbar.escapeAdmin,tour\/tour,user\/drupal.user.icons","theme":"seven","theme_token":"fgZ7RGWqpU2wWWP3XYc6USr9KbbyA_1l5qwlIp0KUNU"},"ajaxTrustedUrl":[],"toolbar":{"breakpoints":{"toolbar.narrow":"only screen and (min-width: 16.5em)","toolbar.standard":"only screen and (min-width: 38.125em)","toolbar.wide":"only screen and (min-width: 61em)"},"subtreesHash":"APKzzG5_CSlg3kPE7AJXxqdeQn2AWGAokFDvTmhquIQ"},"user":{"uid":"1","permissionsHash":"ab6c8deb3e2d26f2b3544f6a528567a26c8294be77aaf7f5c3a801a7ba7adbfd"}}</script>
    <script src="{{asset('asset/js/drupal/domready.js')}}" charset="utf-8"></script>
    <script src="{{asset('asset/js/drupal/modernizr.min.js')}}" charset="utf-8"></script>
@endsection