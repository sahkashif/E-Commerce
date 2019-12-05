<!--product area start-->
<section class="product_area related_products">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>Related Products	</h2>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="product_carousel product_column4 owl-carousel">
                @foreach ($relatedProducts as $product) 
                <div class="col-lg-3">
                    <!-- modal area start-->
                @include('inc.product_modal')
                <!-- modal area end--> 
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
                                <a class="primary_img" href="product-details.html"><img src="data:image/png;base64,{{ chunk_split(base64_encode($product->colors()->defaultColor()->first()->imgs()->pluck('img')->first())) }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale!</span>
                                </div>
                                <div class="quick_button">
                                    <a href="#modal_box" data-toggle="modal" data-target="#modal_box-{{ $product->id }}"  title="quick view"> Quick View</a>
                                </div>
                                
                            </div>
                            <div class="product_footer">
                                <div class="price_box"> 
                                    <span class="old_price">$76.00</span> 
                                    <span class="current_price">$72.00</span>
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