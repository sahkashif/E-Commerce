@extends('layouts.app')
@section('content')
<br>
<div class="card">
    <div class="card-body">
        <ul class="list-group">
            @foreach ($categories as $category)
                <li class="list-group-item">
                    <h6>{{ $category->name }}
                    <a href="{{ route('category.edit', $category->id) }}">  edit..</a></h6>
                    <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
    <a href="{{ route('category.create') }}" class="link">Add Category..</a>
</div>

<br>
@endsection