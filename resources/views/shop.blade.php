@extends('layouts.app')
@section('content')
<!--shop banner area start-->
<div class="shop_banner_area mt-50 mb-45">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="shop_banner_thumb">
                    <img src="{{ asset('img/bg/banner16.jpg') }}" alt="cramp">
                </div>
            </div>
        </div>
    </div>
</div>
<!--shop banner area end-->

    
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="/">home</a></li>
                        <li>shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<!--breadcrumbs area end-->
    
<!--shop  area start-->
<div class="shop_area shop_reverse mt-45 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <!--sidebar widget start-->
                @include('inc.shop.sidebar')
                <!--sidebar widget end-->
            </div>
            <div class="col-lg-9 col-md-12">
                <!--shop wrapper start-->
                <!--shop toolbar start-->
                @include('inc.shop.toolbar')                
                <!--shop toolbar end-->
                <div class="row shop_wrapper">
                    @foreach ($products as $product)
                    <div class="col-lg-4 col-md-4 col-12 ">
                        <article class="single_product">
                            <figure>
                                <div class="product_name">
                                    <h4><a href="product-details.html">{{ $product->name }}</a></h4>
                                </div>
                                <div class="product_rating">
                                    <div class="star-ratings">
                                        <div class="fill-ratings" style="width: {{ $product->rating() }}%;">
                                            <span>★★★★★</span>
                                        </div>
                                        <div class="empty-ratings">
                                            <span>★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                    @if ($product->is_sale() == 1)
                                        <div class="label_product">
                                            <span class="label_sale">Sale!</span>
                                        </div>
                                    @endif
                                    
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                    </div>
                                </div>
                                <div class="product_footer product_content grid_content">
                                    <div class="price_box">
                                        @if ($product->is_sale() == 1)
                                            <span class="old_price">${{ $product->price }}</span>
                                            <span class="current_price">${{ $product->present_price }}</span>
                                        @else
                                            <span class="current_price">${{ $product->price }}</span>
                                        @endif 
                                    </div>
                                    <div class="action_links">
                                            <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                            <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                            <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <div class="product_name">
                                            <h4><a href="product-details.html">{{ $product->name }}</a></h4>
                                    </div>
                                    <div class="product_rating">
                                        <div class="star-ratings">
                                            <div class="fill-ratings" style="width: {{ $product->rating() }}%;">
                                                <span>★★★★★</span>
                                            </div>
                                            <div class="empty-ratings">
                                                <span>★★★★★</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price_box">
                                        @if ($product->is_sale() == 1)
                                            <span class="old_price">${{ $product->price }}</span>
                                            <span class="current_price">${{ $product->present_price }}</span>
                                        @else
                                            <span class="current_price">${{ $product->price }}</span>
                                        @endif 
                                    </div>
                                    <div class="product_desc">
                                        <p>{{ $product->product_description }}</p>
                                    </div>
                                    <div class="action_links">
                                            <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                            <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                            <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    @endforeach
                </div>

                @if ($products->count() > 12)
                <div class="shop_toolbar t_bottom">
                    <div class="pagination">
                        {{ $products->links() }}
                    </div>
                </div>
                @endif
                
                <!--shop toolbar end-->
                <!--shop wrapper end-->
            </div>
        </div>
    </div>
</div>
@endsection
    
  