@extends('layouts.dashboard')
@section('dashboard_content')
@php
    
@endphp
<ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('product.index') }}">ALL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('product.index', ['v' => 'featured']) }}">FEATURED</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('product.index', ['v' => 'sale']) }}">SALE!</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('product.index', ['v' => 'on-deals']) }}">ON DEALS!</a>
    </li>
</ul>

<!-- product section -->
<div class="table-responsive">
  <table class="table table-light">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">SKU</th>
        <th scope="col">NAME</th>
        <th scope="col">IMG</th>
        <th scope="col">CATEGORY</th>
        <th scope="col">SUB_CATEGORY</th>
        <th scope="col">STOCK</th>
        <th scope="col">MERGIN</th>
        <th scope="col">PRICE</th>
        <th scope="col">PRESENT_PRICE</th>
        <th scope="col">SALE_START</th>
        <th scope="col">SALE_END</th>
        <th scope="col">CREATED_AT</th>
        <th scope="col">UPDATED_AT</th>
        <th scope="col">EDIT</th>
        <th scope="col">DELETE</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
      <tr>
        <th scope="row">{{ $product->id }}</th>
        <td>{{ $product->sku }}</td>
        <td>{{ $product->name }}</td>
        <td>
          <div class="container order_img">
            <img src="/storage/images/product/{{ $product->imgs()->pluck('img')->first() }}" alt="No image found">
          </div>
        </td>
        <td>{{ $product->category()->pluck('name')->first() }}</td>
        <td>{{ $product->subcategory()->pluck('name')->first() }}</td>
        <td>{{ $product->stock }}</td>
        <td>{{ $product->stock_mergin }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->present_price }}</td>
        @if ($product->is_sale())
        <td>{{ date("d M Y, D",strtotime($product->sale_started_at)) }}</td>
        <td>{{ date("d M Y, D",strtotime($product->sale_ended_at)) }}</td>             
        @else
        <td colspan="2">not in sale!</td>  
        @endif
        <td>{{ date("d M Y, D",strtotime($product->created_at)) }}</td>
        <td>{{ date("d M Y, D",strtotime($product->updated_at)) }}</td>
        <td>
          <div class="justify-content-center">
            <button onclick="window.location.href = '{{ route('product.edit', $product->id) }}'" class="btn btn-sm-primary text-uppercase">EDIT</button>
          </div>
        </td>
        <td>
          <form action="{{ route('product.destroy', $product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm-primary text-uppercase">DELETE</button>
          </form>
        </td>
      </tr> 
      @endforeach
      
    </tbody>
  </table>  
</div>
@endsection