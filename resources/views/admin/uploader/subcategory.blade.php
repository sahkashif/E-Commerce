@extends('layouts.dashboard')
@section('dashboard_content')
<br>
<div class="card">
    <div class="card-body">
        <ul class="list-group">
            @foreach ($subcategories as $subcategory)
                <li class="list-group-item">
                    <h6>{{ $subcategory->name }}
                    <a href="{{ route('subcategory.edit', $subcategory->id) }}">  edit..</a></h6>
                    <form action="{{ route('subcategory.destroy', $subcategory->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
    <a href="{{ route('subcategory.create') }}" class="link">Add subcategory..</a>
</div>

<br>
@endsection