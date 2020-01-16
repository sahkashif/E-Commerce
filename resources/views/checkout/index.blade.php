@extends('layouts.app')
@section('content')
<!--breadcrumbs area start-->
<div class="breadcrumbs_area mt-45">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="/">home</a></li>
                        <li><a href="{{ route('shop.index') }}">store</a></li>
                        <li><a href="{{ route('cart.index') }}">cart</a></li>
                        <li>billig details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<!--breadcrumbs area end-->
@include('inc.message')
<!--Checkout page section-->
<div class="Checkout_section mt-45">
    <div class="container">
        <form action="{{ route('checkout.shipping') }}" method="post">
            @csrf
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3>Billing Details</h3>
                        <div class="row">

                            <div class="col-lg-12 mb-20">
                                <label>Name <span>*</span></label>
                                <input type="text" name="name" placeholder="{{ Auth::user()->name }}">    
                            </div>
                            <div class="col-12 mb-20">
                                <label>Street address  <span>*</span></label>
                                <input placeholder="Ex: 29/13, Block-X, XYZ ROAD" type="text" name="address" required>     
                            </div>
                            
                            <div class="col-6 mb-20">
                                <label>Town / City <span>*</span></label>
                                <input  type="text" name="city" placeholder="Ex: Dhaka" required>    
                            </div> 
                            <div class="col-6 mb-20">
                                <label>Postal Code<span>*</span></label>
                                <input  type="text" name="postal_code" placeholder="Ex: 1207" required>    
                            </div>
                                
                            <div class="col-lg-6 mb-20">
                                <label>Cell Number<span>*</span></label>
                                <input type="tel" name="phone" pattern="[0]{1}[1]{1}[3,4,5,6,7,8,9]{1}[0-9]{4}[0-9]{4}" placeholder="01XXXXXXXXX" required> 

                            </div> 
                            <div class="col-lg-6 mb-20">
                                <label> Email Address   <span>*</span></label>
                                <input type="email" value="{{ Auth::user()->email }}" readonly> 

                            </div> 
                            
                            
                            <div class="col-12">
                                <div class="order-notes">
                                    <label for="order_note">Order Notes</label>
                                    <textarea name="notes" id="order_note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>    
                            </div>     	    	    	    	    	    	    
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h3>Your order</h3> 
                        <div class="order_table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart->items as $item)
                                    <tr>
                                        <td> {{ $item->getItem()['name'] }} <strong> × {{ $item->getQty() }}</strong></td>
                                        <td> &#2547 {{ $item->subtotalPrice() }}</td>
                                    </tr>  
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Cart Subtotal</th>
                                        <td> &#2547 {{ $cart->totalPrice() }}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td><strong>&#2547 {{ $shippingMethod->charge }}</strong></td>
                                    </tr>
                                    <tr class="order_total">
                                        <th>Order Total</th>
                                        <td><strong>&#2547 {{ $cart->grandTotal }}</strong></td>
                                    </tr>
                                </tfoot>
                            </table>     
                        </div>
                        <div class="order_button center">
                            <button  type="SUBMIT">Place Your Order</button> 
                        </div>    
                    </div>
                </div> 
            </div>
        </form> 
    </div>       
</div>
<!--Checkout page section end-->

@endsection