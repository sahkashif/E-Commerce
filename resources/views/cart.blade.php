@extends('layouts.app')
@section('content')
<!--shopping cart area start -->
<div class="shopping_cart_area mt-45">
    <div class="container">  
        <form action="{{ route('checkout.index') }}" method="POST">
            @csrf 
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="cart_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product_remove">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (Session::has('cart'))
                                    @foreach ($products as $product)
                                    <tr>
                                        <td class="product_remove">
                                            
                                                <button type="submit"><i class="fa fa-trash-o"></i></button>
                                            
                                            
                                        </td>
                                        <td class="product_thumb"><a href="#"><img src="data:image/png;base64,{{ chunk_split(base64_encode($images->where('product_id', $product->getItem()['id'])->where('color_id',$product->getColor()->toArray()['id'])->pluck(['img'])->first())) }}" alt=""></a></td>
                                        <td class="product_name"><a href="#">{{ $product->getItem()['name'] }}</a></td>
                                        <td class="product-price">&#2547 {{ $product->getItem()['present_price'] }}</td>
                                        <td class="product_quantity"><label>Quantity</label> <input min="1" max="10" value="{{ $product->getQty() }}" type="number"></td>
                                        <td class="product_total">&#2547 {{ $product->subtotalPrice() }}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    
                                </tbody>
                            </table>   
                        </div>  
                        <div class="cart_submit">
                            <button type="submit">update cart</button>
                        </div>      
                    </div>
                </div>
            </div>
                <!--coupon code area start-->
            <div class="coupon_area">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code left">
                            <h3>Coupon</h3>
                            <div class="coupon_inner">   
                                <p>Enter your coupon code if you have one.</p>                                
                                <input placeholder="Coupon code" type="text">
                                <button type="submit">Apply coupon</button>
                            </div>    
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal ">
                                    <div class="btn-group btn-group-toggle">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="shipping" id="inlineRadio1" value="200" required>
                                            <label class="form-check-label"><h4 class="h6 text-dark">Inside Dhaka</h4></label>
                                        </div>
                                                
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="shipping" id="inlineRadio2" value="300">
                                            <label class="form-check-label"><h4 class="h6 text-dark">Outside Dhaka</h4></label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="cart_subtotal">
                                    <p>Subtotal</p>
                                    <p class="cart_amount">&#2547 {{ $total }}</p>
                                </div>
                                <div class="cart_subtotal">
                                    <p>Shipping</p>
                                    <p class="cart_amount" id="ship">Please Select a Shipping Area</p>
                                </div>
                                
                               
                               <hr>
    
                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p class="cart_amount" id="total">&#2547 {{ $total }}</p>
                                </div>
                                <input type="hidden" name="total" id="total-hidden" value="">
                                <input type="hidden" name="shippingCharge" id="shippingCharge" value="">
                                <div class="checkout_btn">
                                    <button type="submit">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area end-->
        </form> 
    </div>     
</div>
<!--shopping cart area end -->
<script>
 $(document).ready(function(){
    $("input:radio[name=shipping]").click(function() {
    $("#ship").css("background-color", "yellow"); // change the color of the background
    $('#ship').html('&#2547 '+$(this).val());

    var totals = parseInt($(this).val())+{{ $total }};
    
    
    $('#total').html('&#2547 '+totals);
    $('#shippingCharge').val($(this).val());
    $('#total-hidden').val(totals);
    })
    
    });
</script>
@endsection

    
     