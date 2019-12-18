@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('inc.message')
        <div class="col-md-10">
            <div class="card">
                <div class="card-header ">Products</div>
                <div class="card-body">
                    @foreach ($products as $product)
                    <div class="card">
                        <div class="card-header {{ $product->is_active() ? 'bg-success' : '' }}">
                            <div class="row">
                                <a href="{{ route('shop.product',$product->id) }}" class="col-lg-8 h6 ">{{ $product->name }}</a>
                                <div class=" col-lg-4 row">
                                    <a class=" btn-sm btn-primary  text-center col-sm-6">EDIT..</a>
                                    <a class="btn-sm btn-danger  text-center col-sm-6">DELETE!!</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">ID: {{ $product->id }}</li>
                                <li class="list-group-item">SKU: {{ $product->sku }}</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                              </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>
</div>  
@endsection