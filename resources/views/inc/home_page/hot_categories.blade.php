<div class="categories_product_area mb-50 ">
        <div class="container">
           <div class="row">
               <div class="col-12">
                    <div class="section_title">
                       <h2>Hot Categories</h2>
                    </div>
                </div>
        </div>
        <div class="row categories_margin no-gutters">
        @foreach ($featuredCategories as $category)
        
            <div class="col-lg-3 col-md-6">
                <article class="single_categories_product column1">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="shop.html"><img src="{{ asset('img/categories/'.$category->id.'.jpg') }}" alt=""></a>
                        </div>
                        <div class="categories_product_content">
                            <h4><a href="{{ route('shop.index', ['category' => $category->id]) }}">{{ $category->name }}</a></h4>
                            <ul>
                                @foreach ($category->subcategories()->get() as $subcategory)
                                    <li><a href="{{ route('shop.index', ['subcategory' => $subcategory->id]) }}">{{ $subcategory->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </figure>
                </article> 
                <br><br>
            </div>
            
       
        @endforeach
        </div>
</div>


