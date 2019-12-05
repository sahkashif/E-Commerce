<!--product area start-->
<section class="product_area upsell_products">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>Upsell Products	</h2>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="product_carousel product_column4 owl-carousel">
                @foreach ($upsellProducts as $product)
                <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_name">
                                    <h4><a href="{{ route('shop.product', $product->id) }}">{{ $product->name }}</a></h4>
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
                                    <a class="primary_img" href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale!</span>
                                    </div>
                                </div>
                                <div class="product_footer">
                                    <div class="price_box"> 
                                        <span class="old_price">${{ $product->price }}</span> 
                                        <span class="current_price">${{ $product->present_price }}</span>
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
        </div>  
    </div>
</section>
<!--product area end-->