<div class="small_product_area product_bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="product_header">
                        <div class="section_title">
                           <h2>Computer & Laptop</h2>

                        </div>
                        <div class="product_tab_btn">
                            <ul class="nav" role="tablist">
                                @foreach ($hotCategories as $category)
                                    <li>
                                        <a class="{{ $loop->first ? 'active' : '' }}" data-toggle="tab" href="#{{ $category->name }}" role="tab" aria-controls="{{ $category->name }}" aria-selected="{{ $loop->first ? 'true' : '' }}"> 
                                            {{ $category->name }}
                                        </a>
                                    </li> 
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="tab-content">
                @foreach ($hotCategories as $category)
                    
                
                <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="{{ $category->name }}" role="tabpanel">
                      
                    <div class="row">
                            
                        <div class="product_carousel small_p_container  product_column3 owl-carousel">
                            
                            @foreach ($category->products()->get() as $product)
                            
                            <div class="col-lg-3">
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                                                </div>
                                                <div class="product_content">
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
                                                        <span class="old_price">${{ $product->price }}</span> 
                                                        <span class="current_price">${{ $product->present_price }}</span>
                                                    </div>
                                                </div>
                                            </figure>
                                        </article>
                                        
                                    </div>
                                </div>
                            @endforeach
                            
                            
                        </div> 
                    </div>
                    @endforeach   
                </div>
            </div> 
              
        </div>
    </div>