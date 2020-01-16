@extends('layouts.app')

@section('content')
    <!--slider area start-->
    @include('inc.home_page.slider')
    <!--slider area end-->
    @include('inc.message')
    <!--shipping area start-->
    <div class="shipping_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src={{ asset('img/about/shipping1.png') }} alt="">
                        </div>
                        <div class="shipping_content">
                            <h4>Home Delivery</h4>
                            <p>Pay at your door step</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <a href="#"> <img src={{ asset('img/about/shipping2.png') }} alt=""> </a>
                        </div>
                        <div class="shipping_content">
                            <h4> <h4>Online Support 24/7</h4>
                            <p>Support online 24 hours a day</p> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src={{ asset('img/about/shipping3.png') }} alt="">
                        </div>
                        <div class="shipping_content">
                            <h4>Money Return</h4>
                            <p>Back guarantee under 7 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <a href="#"> <img src={{ asset('img/about/shipping4.png') }} alt=""></a>
                        </div>
                        <div class="shipping_content">
                            <a href="#"> <h4>Member Discount</h4>
                            <p>Become a member</p> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shipping area end-->
    <!--banner area start-->
    <div class="banner_area mb-45">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="/shop"><img src={{ asset('img/bg/banner1.png') }} alt=""></a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="/shop"><img src={{ asset('img/bg/banner2.png') }} alt=""></a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="/shop"><img src={{ asset('img/bg/banner3.png') }} alt=""></a>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--Categories product area start-->
    @include('inc.home_page.hot_categories')
    <!--Categories product area end-->

    <!--banner area start-->
    <div class="banner_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src={{ asset('img/bg/banner4.png') }} alt=""></a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src={{ asset('img/bg/banner5.png') }} alt=""></a>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->
    
    <!--product area start-->
    @include('inc.home_page.daily_deals')
    <!--product area end-->
    
    <!---- Youtube banner -->
    @include('inc.home_page.youtube_banner')
    <!---- Youtube banner End-->

    
    
    <!-- empty space for later use starts
    <div class="product_area product_bg mb-45">
    </div>-->
    <!--empty space for later use ends-->
    
    
    
    

   
@endsection