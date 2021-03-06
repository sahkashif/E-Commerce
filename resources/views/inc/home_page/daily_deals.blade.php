
<div class="product_area deals_product mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>Deal Of The Days</h2>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="product_carousel product_column4 owl-carousel">
                @foreach ($onDealProducts as $product)
                <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_name">
                                    <h4><a href="{{ route('shop.product',$product->id) }}">{{ $product->name }}</a></h4>
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
                                    <a class="primary_img" href="{{ route('shop.product',$product->id) }}"><img src="storage/images/product/{{ $product->imgs()->pluck('img')->first() }}" alt="No Image Found! Crap as Fuck Man!!"></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale!</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                    </div>
                                </div>
                                <div class="price_box"> 
                                    <span class="old_price">&#2547 {{ $product->price }}</span> 
                                    <span class="current_price">&#2547 {{ $product->present_price }}</span>
                                </div>
                                <div class="product_timing">
                                    <div data-countdown="{{ $product->sale_ended_at }}"></div>
                                </div>
                            </figure>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>