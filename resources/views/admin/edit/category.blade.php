@extends('layouts.dashboard')
@section('dashboard_content')
<br>
<div class="container p-4">
    <div class="row justify-content-center">
       
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Category Editor</div>
                @include('inc.message')
                <form action="{{ route('category.update', $category->id) }}" class="p-5" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="sku">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" value="{{ $category->name }}">
                    </div>
                    <div class="form-group">
                        <label for="sku">SKU</label>
                    <input type="text" class="form-control" id="sku" name="sku" placeholder="Category SKU" value="{{ $category->sku }}">
                    </div>
                    <div class="form-group">
                        <label for="details">Details</label>
                    <input type="text" class="form-control" id="details" name="details" placeholder="Category Details" value="{{ $category->details }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                    <input type="textarea" class="form-control" id="description" name="description" placeholder="Category description" value="{{ $category->description }}">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="active" id="active" {{ $category->active == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="active">Active</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="featured" id="featured" {{ $category->featured == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="featured">Featured</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="hot" id="hot" {{ $category->hot == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="hot">Hot</label>
                    </div>
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </form>
                
            </div>
        </div>
    </div>
</div>
<br>
@endsection