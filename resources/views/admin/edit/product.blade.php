@extends('layouts.dashboard')
@section('dashboard_content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
            @include('inc.message')
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h5 class="h5">Product Upload </h5></div>
                <div class="card-body">
                    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                          <h6 class="h6">Category</h6>
                        <hr>
                        <div class="form-group">
                          <label for="category">Select Category<span class="text-danger">*</span></label>
                          <select class="form-control" id="category" name="category" required>
                              @foreach ($categories as $category)
                              <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }} >{{ $category->name }}</option>
                              @endforeach
                          </select>
                        </div>
                        <br>
                          <h6 class="h6">Sub-Category</h6>
                        <hr>
                        <div class="form-group">
                          <label for="subcategory">Select Sub-Category<span class="text-danger">*</span></label>
                          <select class="form-control" id="subcategory" name="subcategory" required>
                              
                          </select>
                        </div>
                        <br>
                          <h6 class="h6">Product Details</h6>
                        <hr>
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" value="{{ $product->name }}">
                        </div>
                        <div class="form-group">
                            <label for="sku">SKU</label>
                            <input type="text" class="form-control" id="sku" name="sku" placeholder="Product SKU" value="{{ $product->sku }}">
                        </div>
                        <div class="form-group">
                            <label for="details">Details</label>
                            <input type="text" class="form-control" id="details" name="details" placeholder="Product Details" value="{{ $product->product_details }}">
                        </div>
                        <div class="form-group">
                          <label for="description">Description</label>
                          <textarea class="form-control" id="decription" name="description" rows="3" placeholder="Product Description">{{ $product->product_description }}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="stock">Stock</label>
                          <input type="number" class="form-control" id="stock" name="stock" placeholder="stock" value="{{ $product->stock }}">
                        </div>
                        <div class="form-group">
                          <label for="mergin">Mergin</label>
                          <input type="number" class="form-control" id="mergin" name="mergin" placeholder="margin" value="{{ $product->stock_mergin }}">
                        </div>
                        <div class="form-group">
                          <label for="price">Price</label>
                          <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Price" value="{{ $product->price }}">
                        </div>
                        @if ($product->is_sale())
                        <div class="form-group">
                            <label for="present_price">Price after Discount</label>
                            <input type="number" step="0.01" class="form-control" id="present_price" name="present_price" placeholder="Discounted Price" value="{{ $product->present_price }}">
                          </div>
                          <div class="form-group">
                            <label for="sale_start_at">Sale will start at</label>
                            <input type="datetime-local" class="form-control" id="sale_start_at" name="sale_start_at" placeholder="Sale will start at" value="{{ $product->sale_started_at }}">
                          </div>
                          <div class="form-group">
                            <label for="sale_end_at">Sale will end at</label>
                            <input type="datetime-local" class="form-control" id="sale_end_at" name="sale_end_at" placeholder="Sale will end at" value="{{ $product->sale_ended_at }}">
                          </div>  
                        @else
                        <div class="form-group">
                            <label for="present_price">Price after Discount</label>
                            <input type="number" step="0.01" class="form-control" id="present_price" name="present_price" placeholder="Discounted Price">
                          </div>
                          <div class="form-group">
                            <label for="sale_start_at">Sale will start at</label>
                            <input type="datetime-local" class="form-control" id="sale_start_at" name="sale_start_at" placeholder="Sale will start at">
                          </div>
                          <div class="form-group">
                            <label for="sale_end_at">Sale will end at</label>
                            <input type="datetime-local" class="form-control" id="sale_end_at" name="sale_end_at" placeholder="Sale will end at">
                          </div>  
                        @endif
                        <br>
                        <h6 class="h6">Access Modifier</h6>
                        <hr>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="active" id="active" {{ $product->is_active() ? 'checked' : '' }}>
                            <label class="form-check-label" for="active">Active</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="on_deals" id="on_deals" {{ $product->on_deals == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="on_deals">On Deals</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="featured" id="featured" {{ $product->featured == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="featured">Featured</label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-lg btn-success">UPDATE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<script>
$("#category").on('change', function(){
    $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    $.ajax({
        type     : 'get',
        url      : '/api/category/'+$('#category').val(),
        dataType : 'json',
        success  : function(response) {
            //iterate through all bookings for our event 
            //console.log(response.stops);
            $('#subcategory option').remove();
            $.each(response.subcategories, function(index, subcategory) {
                
                $('#subcategory').append(`<option value="${subcategory.id}"> 
                                    ${subcategory.name} 
                                </option>`);
            }  
            
            
            );}
            
    });
});
</script>
@endsection