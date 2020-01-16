@extends('layouts.app')

@section('content')

<!--breadcrumbs area start-->
<div class="breadcrumbs_area mt-45">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="/home">home</a></li>
                        <li>My account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<!--breadcrumbs area end-->
@include('inc.message')
<!-- my account start  -->
<section class="main_content_area">
    
    <div class="container">   
        <div class="account_dashboard">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    @auth
                    
                    @if (Auth::user()->hasRole('admin'))
                        @include('admin.inc.adminnav')
                    @else
                        @include('user.inc.usernav')
                    @endif
                        
                    @endauth  
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        @yield('dashboard_content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
