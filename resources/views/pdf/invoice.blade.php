@extends('layouts.pdf')
@section('pdf-content')
<br><br>
<div class="container page-break">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <div class="text-left">
                        <h4 class="font-weight-normal font-italic">{{ date("d M Y, D",strtotime($order['updated_at'])) }}</h4>
                    </div>
                </div>
                <div class="col-6 text-right">
                    <h5> STATUS: <span class="text-warning text-uppercase bold text-italic"><input class="text-uppercase {{ $order['order_status'] == 'processed' ? 'text-success': 'text-warning'}} text-center" type="text" value="{{ $order['order_status'] }} " readonly> </span></h5>
                </div>
            </div>
        </div>
        <div class="col-12">
            <span>
                <h4>ORDER ID: {{ $order['id'] }}</h4>
            </span> 
        </div>
    </div>
    <hr>
    <div>
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">PRODUCT</th>
                    <th scope="col">QTY</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">TOTAL</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($order['products'] as $product)
                    <tr>
                        <th scope="row">{{ $product['product']['name'] }}</th>
                        <td>{{ $product['pivot']['quantity'] }}</td>
                        <td>{{ $product['product']['price'] }}</td>
                        <td>{{ $product['product']['price']*$product['pivot']['quantity'] }}</td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> 
    <hr>
    <div>
      <div class="row">
        <div class="col-6">
            <span>
                <h4>SHIPPING DETAILS</h4>
            </span>
        </div>
        <div class="col-6">
          <div class="text-right">
            <h5>SHIPPING STATUS: <span class="text-warning text-uppercase bold text-italic"><input class="text-uppercase {{ $order['shipping']['status'] == 'delivered' ? 'text-success': 'text-warning'}} text-center" type="text" value="{{ $order['shipping']['status'] }} " readonly> </span></h5>
          </div>
          <div class="text-right">
            <h5>SHIPPING TYPE: <span class="text-warning text-uppercase bold text-italic"><input class="text-uppercase text-center" type="text" value="{{ $order['shipping']['shipping_method']['slug'] }} " readonly> </span></h5>
          </div>
        </div>
      </div>
        <br>
        <div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Name</label>
                  <input type="name" class="form-control" id="name" value="{{ $order['shipping']['receiver_name'] }}" readonly>
                </div>
                <div class="form-group col-md-6">
                  <label for="mobile">Mobile</label>
                  <input type="tel" class="form-control" id="mobile" value="{{ $order['shipping']['receiver_phone_number'] }}" readonly>
                </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" value="{{ $order['shipping']['address'] }}" readonly>
              </div>
              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" value="{{ $order['user']['email'] }}" readonly>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" value="{{ $order['shipping']['city'] }}" readonly>
              </div>
              <div class="form-group col-md-6">
                <label for="zip">Zip</label>
              <input type="text" class="form-control" id="zip" value="{{ $order['shipping']['postal_code'] }}" readonly>
              </div>
            </div>
        </div>
    </div> 
    <hr>
    <br>
    <div>
      <div class="row border p-3">
        <div class="col-6">
            <span>
                <h4>PAYMENT RECEIPT</h4>
            </span>
        </div>
        <div class="col-6">
          <div class="text-right">
            <h5>PAYMENT STATUS: <span class="text-warning text-uppercase bold text-italic"><input class="text-uppercase {{ $order['payment_details']['status'] == 1 ? 'text-success': 'text-warning'}} text-center" type="text" value="{{ $order['payment_details']['status'] == 0 ? 'DUE' : 'PAID' }} " readonly> </span></h5>
          </div>
          <div class="text-right">
            <h5>PAYMENT TYPE: <span class="text-warning text-uppercase bold text-italic"><input class="text-uppercase text-center" type="text" value="{{ $order['payment_details']['payment_method']['slug'] }} " readonly> </span></h5>
          </div>
        </div>
        <br>
        <div class="col-12">
            @if ($order['discount'] != 0)
            <div class="row">
                <strong> DISCOUNT:  <span>{{ round($order['discount'], 2) }}</span></strong>
            </div>
            <hr>
            @endif
          <div class="row">
            <strong> SUBTOTAL: <span>{{ round($order['sub_total']-$order['shipping']['shipping_method']['charge'], 2) }}</span></strong>
          </div>
          <hr>
          <div class="row">
            <strong> SHIPPING:  <span>{{ round($order['shipping']['shipping_method']['charge'], 2) }}</span></strong>
          </div>
          <hr>
          
          
          <div class="row">
            <h3 class="font-weight-bold"> TOTAL:    <span>{{ round($order['total'], 2) }}</span></h3>
          </div>
        </div>
      </div>
        <br>
    </div>     
</div>
@endsection