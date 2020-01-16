<!--product area start-->
<div class="product_area mb-15">
    <div class="product_header">
        <div class="section_title">
           <h2>Featured Products</h2>
        </div>
        <div class="product_tab_btn">
            <ul class="nav row" role="tablist">
                @foreach ($categories as $category)
                <li class="col-4">
                    <a class="{{ $loop->first ? 'active' :'' }}" data-toggle="tab" href="#{{ $category->name }}" role="tab-{{ $category->id }}" aria-controls="{{ $category->name }}" aria-selected="{{ $loop->first ? 'true' :'' }}"> 
                         {{ $category->name }}
                    </a>
                </li> 
                @endforeach
            </ul>
        </div>
    </div>
    <div class="tab-content">
        @foreach ($categories as $category)
        <div class="tab-pane fade {{ $loop->first ? 'show active' :'' }}" id="{{ $category->name }}" role="tabpanel-{{ $category->id }}">
            <div class="row">
                <div class="product_carousel product_style product_column3 owl-carousel">
                    <div class="col-lg-3">
                        @foreach ($category->products()->get() as $product)
                        {{ $product->id }}
                        <article class="single_product">
                            <figure>
                               <div class="product_name">
                                   <h4><a href="{{ route('shop.product', $product->id) }}">Officiis debitis varius risus dignissim massa quis</a></h4>
                               </div>
                               <div class="product_rating">
                                   <ul>
                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                   </ul>
                               </div>

                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale!</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                    </div>
                                </div>
                                <div class="product_footer">
                                    <div class="price_box"> 
                                        <span class="old_price">$80.00</span> 
                                        <span class="current_price">$70.00</span>
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
                        @endforeach
                    </div> 
            </div>   
        </div>
        @endforeach
    </div> 
</div>
<!--product area end-->