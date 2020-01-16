<a href="javascript:void(0)">
    <span class="cart_icon">
        <i class="ion-android-cart"></i>
    </span>
    <span class="cart_title">
        @if (Session::has('cart'))
        <span class="cart_quantity">{{ Session::get('cart')->numOfItems() }} item(s)</span>
        <span class="cart_price">${{ Session::get('cart')->totalPrice() }}</span>
        @else
        <span class="cart_quantity">0 items</span>
        <span class="cart_price">&#2547 0.00</span>
        @endif
        
    </span>
</a>
    <!--mini cart-->
<div class="mini_cart">
    <div class="mini_cart_inner">
        @if (Session::has('cart'))
           @foreach (Session::get('cart')->getitems() as $item)
           <div class="cart_item">
                <div class="cart_img">
                    <a href="{{ route('shop.product', $item->getItem()['id']) }}"><img src="/storage/images/product/{{ $images->where('product_id', $item->getItem()['id'])->where('color_id',$item->getColor()->toArray()['id'])->pluck(['img'])->first() }}" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="{{ route('shop.product', $item->getItem()['id']) }}">{{ $item->getItem()['name'] }}</a>
                    <p>Qty: {{ $item->getQty() }} X <span> &#2547 {{ $item->getItem()['present_price'] }} </span></p>    
                </div>
                <form class="cart_remove" action="{{ route('cart.delete', $item->getItem()['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="close" type="submit" class="icon-cancel">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </form>
            </div>    
            @endforeach
        @endif
    </div>
    <div class="mini_cart_footer">
        <div class="cart_button">
            <a href="/cart">View cart</a>
        </div>
        <div class="cart_button">
            <a href="checkout.html">Checkout</a>
        </div>
    </div>
</div>
     <!--mini cart end-->