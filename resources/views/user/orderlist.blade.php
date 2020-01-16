@extends('layouts.dashboard')
@section('dashboard_content')
<h3 class="h3 font-weight-bold">ORDERS</h3>
<div class="list-group ">
    @foreach ($orders as $order)
    <div  class="list-group-item list-group-item-action link">
        <div class="row px-4">
            <div class="col-2">
                <div class="row o-date my-0">
                    {{ date('Y', strtotime($order->created_at)) }}
                </div>
                <div class="row o-date-m my-0">
                    {{ date('d', strtotime($order->created_at)) }}
                </div>
                <div class="row o-date my-0">
                    {{ date('M', strtotime($order->created_at)) }}
                </div>
            </div>
            <div class="col-4">
                <div class="row o-date h4 my-0">
                    <span><h4><a href="{{ route('user.order', $order->id) }}">Order: {{ $order->id }}</a></h4></span>
                </div>
                <div class="row o-date my-0">
                    <span class="h6">Num. of Products: {{ $order->products()->count() }}</span>
                </div>
            </div>
            <div class="col-5 my-auto">
                <div class="row o-date">
                    <span class="h5">Total: &#2547 {{ $order->total }}</span>
                </div>
            </div>
            <div class="col-1">
                @if (Auth::user()->hasRole('admin'))
                <div class="row">
                    <div class="col-1">
                        <div class="row o-date h4 my-auto">
                            
                            <form action="{{ route('order.update', $order->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <label for="order_status">ORDER STATUS</label>
                                <select name="order_status" id="order_status">
                                    <option value="pending" {{ $order->order_status == 'pending' ? 'selected' : '' }}>PENDING</option>
                                    <option value="accepted" {{ $order->order_status == 'accepted' ? 'selected' : '' }}>ACCEPTED</option>
                                    <option value="cancelled" {{ $order->order_status == 'cancelled' ? 'selected' : '' }}>CANCELLED</option>
                                    <option value="processed" {{ $order->order_status == 'processed' ? 'selected' : '' }}>PROCESSED</option>
                                </select>
                                <label for="payment_status">PAYMENT STATUS</label>
                                <select name="payment_status" id="payment_status">
                                    <option value="0" {{ $order->payment_details->status == 0 ? 'selected' : '' }}>DUE</option><br>
                                    <option value="1" {{ $order->payment_details->status == 1 ? 'selected' : '' }}>PAID</option>
                                </select>
                                <label for="shipping_status">SHIPPING STATUS</label>
                                <select name="shipping_status" id="shipping_status">
                                    <option value="pending" {{ $order->shipping->status == 'pending' ? 'selected' : '' }}>PENDING</option>
                                    <option value="shipped" {{ $order->shipping->status == 'shipped' ? 'selected' : '' }}>SHIPPED</option>
                                    <option value="delivered" {{ $order->shipping->status == 'delivered' ? 'selected' : '' }}>DELIVERED</option>
                                </select>
                                <button type="submit" class="btn btn-sm-primary">
                                    UPDATE
                                </button>
                            </form>
                            
                            <button onclick="window.location.href = '{{ route('order.print', $order->id) }}'" class="btn btn-lg-primary text-uppercase">print</button>
                           
                            
                        
                        </div>
                    </div>  
                </div>   
                @else
                <div class="row o-date h4 my-auto">
                    @switch($order->order_status)
                        @case('cancel')
                            <span class="h6 text-danger">{{ $order->order_status }}</span>
                            @break
                        @case('accepted')
                            <span class="h6 text-success">{{ $order->order_status }}</span>
                            @break
                        @default
                            <span class="h6 text-warning">{{ $order->order_status }}</span> 
                    @endswitch
                </div>
                @endif
            </div>
        </div>
    </div>
    @endforeach
    <div class="shop_toolbar t_bottom">
        <div class="pagination">
            {{ $orders->links() }}
        </div>
    </div>
</div>  
@endsection


