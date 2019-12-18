@extends('layouts.app')

@section('content')
@php
    use App\Order;
    use App\ShippingDetails;
    use App\PaymentDetails;
    use App\Product;
@endphp
<!--breadcrumbs area start-->
<div class="breadcrumbs_area mt-45">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>My account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<!--breadcrumbs area end-->

<!-- my account start  -->
<section class="main_content_area">
    
    <div class="container">   
        <div class="account_dashboard">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#orders" data-toggle="tab" class="nav-link active">Orders</a></li>
                            <li> <a href="{{ route('category.index') }}" class="nav-link">Categories</a></li>
                            <li><a href="{{ route('subcategory.index') }}" class="nav-link">Subcategories</a></li>
                            <li><a href="#products" data-toggle="tab" class="nav-link">Products</a></li>
                            <li><a href="#transections" data-toggle="tab" class="nav-link">Transection Status</a></li>
                        </ul>
                    </div>    
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade show active" id="orders">
                            <h3>Orders </h3>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">P/ID</th>
                                            <th scope="col">IMG</th>
                                            <th scope="col">QTY</th>
                                            <th scope="col">AMOUNT</th>
                                            <th scope="col">NOTES</th>h 
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
                        <div class="tab-pane fade" id="categories">
                            <h3>Orders</h3>
                            @if ($orders = Auth::user()->orders())
                            @foreach ( $orders = Auth::user()->orders()->paginate(1) as $order)
                            <div class="card text-sm-left">
                                <div class="card-header">
                                    <h6 class="mb-0 font-weight-bold">{{ $order->slug }}</h6>
                                    <small class="text-muted">Order placed at: {{ $order->created_at }}</small></cite>
                                </div>
                                <div class="card-body">
                                    @foreach ($order->products()->get() as $product)
                                    <div class="card mb-3" style="max-width: 100%;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img src="data:image/png;base64,{{ chunk_split(base64_encode($product->imgs()->pluck('img')->first())) }}" alt="No Image Found! Crap as Fuck Man!!" class="card-img" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $product->product()->get()->first()->name }}</h5>
                                                    <p class="card-text">{{ $product->product()->get()->first()->product_description }}</p>
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    @endforeach
                                </div>
                            </div>
                            <br>
                            @endforeach   
                            @else
                                You Have no Order!
                            @endif
                           
                            <div class="shop_toolbar t_bottom">
                                <div class="pagination">
                                    {{ $orders->links() }}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="subcategories">
                            <h3>Downloads</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Downloads</th>
                                            <th>Expires</th>
                                            <th>Download</th>	 	 	 	
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Shopnovilla - Free Real Estate PSD Template</td>
                                            <td>July 20, 2019</td>
                                            <td><span class="danger">Expired</span></td>
                                            <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                        </tr>
                                        <tr>
                                            <td>Organic - ecommerce html template</td>
                                            <td>July 20, 2019</td>
                                            <td>Never</td>
                                            <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="products">
                            <p>The following addresses will be used on the checkout page by default.</p>
                            <h4 class="billing-address">Billing address</h4>
                            <a href="#" class="view">Edit</a>
                            <p><strong>Bobby Jackson</strong></p>
                            <address>
                                House #15<br>
                                Road #1<br>
                                Block #C <br>
                                Banasree <br>
                                Dhaka <br>
                                1212
                            </address>
                            <p>Bangladesh</p>   
                        </div>
                        <div class="tab-pane fade" id="transections">
                            <h3>Account details </h3>
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <form action="#">
                                            <p>Already have an account? <a href="#">Log in instead!</a></p>
                                            <div class="input-radio">
                                                <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
                                                <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
                                            </div> <br>
                                            <label>First Name</label>
                                            <input type="text" name="first-name">
                                            <label>Last Name</label>
                                            <input type="text" name="last-name">
                                            <label>Email</label>
                                            <input type="text" name="email-name">
                                            <label>Password</label>
                                            <input type="password" name="user-password">
                                            <label>Birthdate</label>
                                            <input type="text" placeholder="MM/DD/YYYY" value="" name="birthday">
                                            <span class="example">
                                                (E.g.: 05/31/1970)
                                            </span>
                                            <br>
                                            <span class="custom_checkbox">
                                                <input type="checkbox" value="1" name="optin">
                                                <label>Receive offers from our partners</label>
                                            </span>
                                            <br>
                                            <span class="custom_checkbox">
                                                <input type="checkbox" value="1" name="newsletter">
                                                <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                                            </span>
                                            <div class="save_button primary_btn default_button">
                                                <button type="submit">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>        	
</section>			
<!-- my account end   --> 

@endsection
