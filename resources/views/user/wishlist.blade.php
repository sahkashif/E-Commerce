@extends('layouts.dashboard')
@section('dashboard_content')
<h3 class="h3 font-weight-bold">WISHLIST</h3>
<div class="list-group ">
    @foreach ($wishlist as $product)
    <a href="{{ route('shop.product', $product->id) }}" class="list-group-item list-group-item-action link">
        <div class="row">
            <div class="col-2">
                <div class="product_thumb">
                   <img src="/storage/images/product/{{ $product->imgs()->pluck('img')->first() }}" alt="No Image Found! Crap as Fuck Man!!">
                    @if ($product->is_sale() == 1)
                        <div class="label_product">
                            <span class="label_sale">Sale!</span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-6">
                <div class="row o-date h4 my-0">
                    <span><h4>{{ $product->name }}</h4></span>
                </div>
                <div class="row o-date my-0">
                    @if ($product->is_sale() == 1)
                        <span class="old_price h5"><del>&#2547 {{ $product->price }}</del></span><br>
                        <span class="current_price h5">&#2547 {{ $product->present_price }}</span>
                    @else
                        <span class="current_price h5">&#2547 {{ $product->price }}</span>
                    @endif 
                </div>
                <div class="row">
                    <p>{{ $product->product_details }}</p> 
                </div>
            </div>
            <div class="col-4">
                <form action="{{ route('wishlist.delete', $product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="close" type="submit" class="icon-cancel">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </form>
            </div>
        </div>
    </a>
    @endforeach
    @if ($wishlist->count() >= 5)
    <div class="shop_toolbar t_bottom">
        <div class="pagination">
            {{ $wishlist->links() }}
        </div>
    </div>
    @endif
</div>
@endsection