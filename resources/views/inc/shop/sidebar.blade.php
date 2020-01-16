<aside class="sidebar_widget">
        <div class="widget_list widget_categories">
            <h3>Product categories</h3>
            <ul>
                @foreach ($categories as $category)
                    @if ($category->subcategories()->count() > 0)
                    
                        <li class="font-weight-bold">{{ $category->name }}</a>
                            
                            <ul class="font-weight-normal">
                                @foreach ($category->subcategories()->get() as $subcategory)
                                    <li><a href="{{ route('shop.subcategory', $subcategory->id) }}">{{ $subcategory->name }}</a></li>
                                @endforeach
                            </ul>
                           
                        </li>
                    @else
                        <li class="font-weight-bold"><a href="{{ route('shop.category', $category->id) }}">{{ $category->name }}</a></li>
                    @endif
                    
                @endforeach
            </ul>
        </div>
        <div class="widget_list widget_filter">
            <h3>Filter by price</h3>
            <ul>
                <li>
                    <span>
                        <a href="{{ Request::url()."?highPrice=2500" }}">
                            <span>Under &#2547 2500</span>
                        </a>
                    </span>
                </li>
                <li>
                    <span>
                        <a href="{{ Request::url()."?lowPrice=2500&highPrice=5000" }}">
                            <span>&#2547 2500 to &#2547 5000</span>
                        </a>
                    </span>
                </li>
                <li>
                    <span>
                        <a href="{{ Request::url()."?lowPrice=5000&highPrice=10000" }}">
                            <span>&#2547 5000 to &#2547 10000</span>
                        </a>
                    </span>
                </li>
                <li>
                    <span>
                            <a href="{{ Request::url()."?lowPrice=10000&highPrice=20000" }}">
                            <span>&#2547 10000 to &#2547 20000</span>
                        </a>
                    </span>
                </li>
                <li>
                    <span>
                        <a href="{{ Request::url()."?lowPrice=20000" }}">
                            <span>&#2547 20000 &amp; Above</span>
                        </a>
                    </span>
                </li>
                <li>
                    
                    <form id="priceFilter" class="form-group" method="GET">  
                        <div class="form-row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="min" name="lowPrice">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="max" name="highPrice">
                            </div>
                        </div>
                        <br>
                        <div class="form-row align-middle">
                        
                        <button class="button col" type="submit">GO</button>
                        </div>
                    </form>
                    <script>
                        const priceFiler= document.getElementById("priceFilter");
                        var lowPrice= document.getElementByName("lowPrice").value;
                        var highPrice= document.getElementByName("highPrice").value;
                        priceFiler.addEventListener("submit", function () {
                            event.preventDefault();
                            location.href=location.href+"&lowPrice="+lowPrice+"&highPrice="+highPrice;
                        })
                    </script>
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