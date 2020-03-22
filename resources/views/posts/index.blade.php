@extends('layouts.app')

@section('content')

@auth
<a href="{{ route('posts.create') }}" class="btn btn-secondary">New Post</a>
@endauth

@foreach ($posts as $post)
<div class="card" id="{{ $post->id }}">
    <div class="card-header">
        {{ $post->title }}
        @auth
        <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-secondary" role="button">Edit</a>
        <form action="{{ route('posts.delete', $post) }}" class="d-inline" method="POST">
            @csrf @method('DELETE')

            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
        @endauth
    </div>
    <div class="card-body">
        <p class="card-text">{{ $post->body }}</p>
    </div>
</div>
@endforeach

@endsection