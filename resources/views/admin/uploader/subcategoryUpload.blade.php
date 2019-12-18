@extends('layouts.app')
@section('content')
<br>
<div class="container p-4">
    <div class="row justify-content-center">
       
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sub-Category Uploader</div>
                @include('inc.message')
                <form action="{{ route('subcategory.store') }}" class="p-5" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="sku">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Select Category</label>
                        <select class="form-control" id="category" name="category" required>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sku">SKU</label>
                        <input type="text" class="form-control" id="sku" name="sku" placeholder="Category SKU" required>
                    </div>
                    <div class="form-group">
                        <label for="details">Details</label>
                        <input type="text" class="form-control" id="details" name="details" placeholder="Category Details" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="textarea" class="form-control" id="description" name="description" placeholder="Category description" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="active" id="active">
                        <label class="form-check-label" for="active">Active</label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
@endsection