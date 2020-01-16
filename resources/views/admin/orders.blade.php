@extends('layouts.app')
@section('content')
<h3>Orders</h3>
@foreach ($orders as $order)
<div>
    <h6>{{ $order->slug }}</h6>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">P/ID</th>
                    <th scope="col">IMG</th>
                    <th scope="col">QTY</th>
                    <th scope="col">AMOUNT</th>
                    <th scope="col">NOTES</th>
                    <th scope="col">O/STATUS</th>
                    <th scope="col">P/STATUS</th>
                    <th scope="col">S/STATUS</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">UPDATE</th>
                    <th scope="col">DELETE</th>
                    <th scope="col">PRINT</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <th scope="row">{{ $order->id }}</th>
                    <td>
                        <ul>
                            @foreach ($order->products()->get() as $product)
                                <li>{{ $product->product()->get()->first()->id }}</li>
                                <li>{{ $product->product()->get()->first()->id }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                            @foreach ($order->products()->get() as $product)
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="data:image/png;base64,{{ chunk_split(base64_encode($product->imgs()->get()->first()->img)) }}" data-zoom-image="data:image/png;base64,{{ chunk_split(base64_encode($product->imgs()->get()->first()->img)) }}">
                                    <img src="data:image/png;base64,{{ chunk_split(base64_encode($product->imgs()->get()->first()->img)) }}" alt="zo-th-1"/>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="data:image/png;base64,{{ chunk_split(base64_encode($product->imgs()->get()->first()->img)) }}" data-zoom-image="data:image/png;base64,{{ chunk_split(base64_encode($product->imgs()->get()->first()->img)) }}">
                                    <img src="data:image/png;base64,{{ chunk_split(base64_encode($product->imgs()->get()->first()->img)) }}" alt="zo-th-1"/>
                                </a>
                            </li>
                            @endforeach
                        </ul> 
                    </td>
                    <td>
                        <ul>
                        @foreach ($order->products()->get() as $product)
                            <li>{{ $product->pivot->quantity }}</li>
                            <li>{{ $product->pivot->quantity }}</li>
                        @endforeach
                        </ul>
                    </td>
                    
                    <td>{{ $order->total }}</td>
                    <td><p>{{ $order->notes }}</p></td>
                    <td>{{ $order->order_status }}</td>
                    <td>{{ $order->payment_details->status }}</td>
                    <td>{{ $order->shipping->status }}</td>
                    <td>
                        <button class="btn-primary">EDIT</button>
                    </td>
                    <td>
                        <button class="btn-success">UPDATE</button>
                    </td>   
                    <td>
                        <button class="btn btn-danger">DELETE</button>
                    </td>
                    <td>
                        <button class="btn btn-danger">PRINT</button>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <div class="shop_toolbar t_bottom">
            <div class="pagination">
                {{ $orders->links() }}
            </div>
        </div>
    </div>
</div>    
@endforeach
@endsection