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
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                          <h6 class="h6">Category</h6>
                        <hr>
                        <div class="form-group">
                          <label for="category">Select Category<span class="text-danger">*</span></label>
                          <select class="form-control" id="category" name="category" required>
                              @foreach ($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                          <label for="sku">Name<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" required>
                        </div>
                        <div class="form-group">
                            <label for="sku">SKU<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="sku" name="sku" placeholder="Product SKU" required>
                        </div>
                        <div class="form-group">
                            <label for="details">Details<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="details" name="details" placeholder="Product Details" required>
                        </div>
                        <div class="form-group">
                          <label for="description">Description<span class="text-danger">*</span></label>
                          <textarea class="form-control" id="decription" name="description" rows="3" placeholder="Product Description" required></textarea>
                        </div>
                        <div class="form-group">
                          <label for="stock">Stock<span class="text-danger">*</span></label>
                          <input type="number" class="form-control" id="stock" name="stock" placeholder="stock" required>
                        </div>
                        <div class="form-group">
                          <label for="margin">Margin<span class="text-danger">*</span></label>
                          <input type="number" class="form-control" id="margin" name="margin" placeholder="margin" required>
                        </div>
                        <div class="form-group">
                          <label for="price">Price<span class="text-danger">*</span></label>
                          <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Price" required>
                        </div>
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
                        <br>
                        <h6 class="h6">Default Color</h6>
                        <hr>
                        <div class="form-group">
                          <label for="color">Color<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="color" name="color" placeholder="Enter Color HEX code" required>
                        </div>
                        <br>
                        <h6 class="h6">Images</h6>
                        <hr>
                        <div class="form-group">
                          <label for="img-1">1ST Image<span class="text-danger">*</span></label>
                          <input type="file" class="form-control-file" id="img-1" name="img-1" required>
                        </div>
                        <div class="form-group">
                          <label for="img-2">2ND Image<span class="text-danger">*</span></label>
                          <input type="file" class="form-control-file" id="img-2" name="img-2" required>
                        </div>
                        <div class="form-group">
                          <label for="img-3">3RD Image<span class="text-danger">*</span></label>
                          <input type="file" class="form-control-file" id="img-3" name="img-3" required>
                        </div>
                        <div class="form-group">
                          <label for="img-4">4TH Image<span class="text-danger">*</span></label>
                          <input type="file" class="form-control-file" id="img-4" name="img-4" required>
                        </div>
                        <br>
                        <h6 class="h6">Access Modifier</h6>
                        <hr>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="active" id="active">
                            <label class="form-check-label" for="active">Active</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="on_deals" id="on_deals">
                            <label class="form-check-label" for="on_deals">On Deals</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="featured" id="featured">
                            <label class="form-check-label" for="featured">Featured</label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-lg btn-success">UPLOAD</button>
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