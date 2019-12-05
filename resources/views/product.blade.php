@extends('layouts.app')
@section('content')
    <!--breadcrumbs area start-->
<div class="breadcrumbs_area mt-45">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/">home</a></li>
                            <li>product details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    @include('inc.message')
    <!--product details start-->
    <div class="product_details mt-45 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="data:image/png;base64,{{ chunk_split(base64_encode($imgs->pluck('img')->first())) }}" data-zoom-image="data:image/png;base64,{{ chunk_split(base64_encode($imgs->pluck('img')->first())) }}" alt="big-1">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                @foreach ($imgs->pluck('img') as $image)
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="data:image/png;base64,{{ chunk_split(base64_encode($image)) }}" data-zoom-image="data:image/png;base64,{{ chunk_split(base64_encode($image)) }}">
                                        <img src="data:image/png;base64,{{ chunk_split(base64_encode($image)) }}" alt="zo-th-1"/>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form method="POST" action="{{ route('cart.add', $product->id) }}">
                            @csrf
                            <h3><a href="{{ route('shop.product', $product->id) }}">{{ $product->name }}</a></h3>
                            
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
                                @if ($product->is_sale()==1)
                                <span class="current_price">${{ $product->price }}</span>
                                <span class="old_price">${{ $product->price }}</span>
                                @else
                                <span class="current_price">${{ $product->price }}</span>
                                @endif
                                
                                
                            </div>
                            <div class="product_desc">
                                <p>{{ $product->product_details }}</p>
                            </div>
                            <div class="product_variant color">
                                <h3>Available Options</h3>
                                <label>color</label>
                                <ul>
                                    @foreach ($product->colors as $color)
                                    
                                    <li style="background-color: {{ $color->color }};"><a href="{{ route('shop.product', ['id'=> $product->id, 'color'=>$color->id]) }}"></a></li>

                                    @endforeach
                                </ul>
                                
                                <input type="hidden" name="color_id" value={{ request()->has('color') ? request()->color : $product->default_color()->id  }}>
                                
                                
                            </div>
                            <div class="product_variant quantity">
                                
                                <label>quantity</label>
                                <input min="1" max="100" value="1" type="number" name="quantity">
                                <button class="button" type="submit">add to cart</button>  
                                
                            </div>
                            <div class=" product_d_action">
                                <ul>
                                    <li><a href="#" title="Add to wishlist">+ Add to Wishlist</a></li>
                                    <li><a href="#" title="Add to wishlist">+ Compare</a></li>
                                </ul>
                            </div>
                            <div class="product_meta">
                                <span>Category: <a href="#">Clothing</a></span>
                            </div>
                            
                        </form>
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>           
                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>           
                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>           
                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>        
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>        
                            </ul>      
                        </div>

                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--product details end-->
    
    @include('inc.product.info')
    
    @include('inc.product.relatedProducts')
    
    @include('inc.product.upsell_products')
@endsection
