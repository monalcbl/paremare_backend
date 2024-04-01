<!DOCTYPE html>
<html lang="en">

<head>
    @include('facilities.layouts.head')
</head>
@php
    $lang='en';
    $langname='عربي';
    $dgn='rtl';
    if(session()->get('locale')=='en'){
        $lang='ar';
        $langname='عربي';
        $dgn='ltr';
    }elseif(session()->get('locale')==null || session()->get('locale')==''){
        $lang='ar';
        $langname='عربي';
        $dgn='ltr';
    }else{
        $lang='en';
        $langname='English';
        $dgn='rtl';
    }
@endphp
<body dir="{{$dgn}}" data-theme="light" class="font-nunito">
<div id="wrapper" class="theme-cyan">

    <!-- Page Loader -->
    {{--  <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../assets/images/logo-icon.svg" width="48" height="48" alt="Iconic"></div>
            <p>Please wait...</p>
        </div>
    </div>  --}}

    <!-- Top navbar div start -->
    <nav class="navbar navbar-fixed-top">
        @include('facilities.layouts.header')
    </nav>


    <!-- main left menu -->
    <div id="left-sidebar" class="sidebar">
        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
        @include('facilities.layouts.sidebar')
    </div>

    <!-- rightbar icon div -->
    {{--  <div class="right_icon_bar">
        <ul>
            <li><a href="app-inbox.html"><i class="fa fa-envelope"></i></a></li>
            <li><a href="app-chat.html"><i class="fa fa-comments"></i></a></li>
            <li><a href="app-calendar.html"><i class="fa fa-calendar"></i></a></li>
            <li><a href="file-dashboard.html"><i class="fa fa-folder"></i></a></li>
            <li><a href="app-contact.html"><i class="fa fa-id-card"></i></a></li>
            <li><a href="blog-list.html"><i class="fa fa-globe"></i></a></li>
            <li><a href="javascript:void(0);"><i class="fa fa-plus"></i></a></li>
            <li><a href="javascript:void(0);" class="right_icon_btn"><i class="fa fa-angle-right"></i></a></li>
        </ul>
    </div>  --}}

    <!-- mani page content body part -->
    <div id="main-content" class="@if(@$pages=='menus') file_manager @endif">
        <div  class="pageLoader" id="pageLoader"></div>
        @yield('content')
    </div>

</div>
<!-- Javascript -->
@include('facilities.layouts.scripts')
@yield('scripts')
</body>
</html>
