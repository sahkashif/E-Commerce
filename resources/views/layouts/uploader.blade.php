@extends('layouts.dashboard')
@section('dashboard_content')

<ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link active" href="#">ALL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.') }}">FEATURED</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
</ul>

<!-- product section -->
<div>
    <ul>
        @foreach ($products as $product)
        <li>{{ $product->name }}</li>
        @endforeach
    </ul>
</div>
@endsection