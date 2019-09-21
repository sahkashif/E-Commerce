<aside class="sidebar_widget">
        <div class="widget_list widget_categories">
            <h3>Product categories</h3>
            <ul>
                @foreach ($categories as $category)
                    @if ($category->subcategories()->count() > 0)
                    
                        <li class="widget_sub_categories"><a href="JavaScript:void(0);">{{ $category->name }}</a>
                            
                            <ul class="widget_dropdown_categories">
                                @foreach ($category->subcategories()->get() as $subcategory)
                                    <li><a href="{{ route('shop.index', ['subcategory' => $subcategory->id]) }}">{{ $subcategory->name }}</a></li>
                                @endforeach
                            </ul>
                           
                        </li>
                    @else
                        <li><a href="{{ route('shop.index', ['category' => $category->id]) }}">{{ $category->name }}</a></li>
                    @endif
                    
                @endforeach
            </ul>
        </div>
        <div class="widget_list widget_filter">
            <h3>Filter by price</h3>
            <ul>
                <li>
                    <span>
                        <a>
                            <span>Under $25</span>
                        </a>
                    </span>
                </li>
                <li>
                    <span>
                        <a>
                            <span>$25 to $50</span>
                        </a>
                    </span>
                </li>
                <li>
                    <span>
                        <a>
                            <span>$50 to $100</span>
                        </a>
                    </span>
                </li>
                <li>
                    <span>
                            <a>
                            <span>$100 to $200</span>
                        </a>
                    </span>
                </li>
                <li>
                    <span>
                        <a >
                            <span>$200 &amp; Above</span>
                        </a>
                    </span>
                </li>
                <li>
                    <form method="post" action="{{ route('shop.filter') }}" class="form-group">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="min" name="low-price">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="max" name="high-price">
                            </div>
                        </div>
                        <br>
                        <div class="form-row align-middle">
                        <button class="button col" type="submit">GO</button>
                        </div>
                    </form>
                </li>    
            </ul>
        </div>
        <div class="widget_list">
            <h3>Compare Products</h3>
            <div class="recent_product_container">
                <article class="recent_product_list">
                    <figure>
                        <div class="product_thumb">
                            <a href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                        </div>
                        <div class="product_content">
                            <h4><a href="product-details.html">Aliquam lobortis pellentesque nisi</a></h4>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="price_box">
                                <span class="old_price">$70.00</span> 
                                <span class="current_price">$65.00</span> 
                            </div>
                        </div>
                    </figure>
                </article>
                <article class="recent_product_list">
                    <figure>
                        <div class="product_thumb">
                            <a href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                        </div>
                        <div class="product_content">
                            <h4><a href="product-details.html">Convallis quam sit vitae sodales neque</a></h4>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="price_box">
                                <span class="old_price">$70.00</span> 
                                <span class="current_price">$65.00</span> 
                            </div>
                        </div>
                    </figure>
                </article>
                <article class="recent_product_list">
                    <figure>
                        <div class="product_thumb">
                            <a href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                        </div>
                        <div class="product_content">
                            <h4><a href="product-details.html">Cillum dolore tortor nisl fermentum</a></h4>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="price_box">
                                <span class="old_price">$70.00</span> 
                                <span class="current_price">$65.00</span> 
                            </div>
                        </div>
                    </figure>
                </article>
            </div>
        </div>
        
        <!--banner area start-->
        <div class="widget_list banner_area">
            <div class="banner_thumb">
                <a href="shop.html"><img src="assets/img/bg/banner15.jpg" alt=""></a>
            </div>
        </div>
        <!--banner area end--> 
        <div class="widget_list tags_widget">
            <h3>Product tags</h3>
            <div class="tag_cloud">
                <a href="#">blouse</a>
                <a href="#">clothes</a>
                <a href="#">fashion</a>
                <a href="#">handbag</a>
                <a href="#">laptop</a>
            </div>
        </div>
    </aside>