@extends('layouts.app')

@section('content')

<h1 class="display-4">All Posts</h1>
<hr>

@foreach ($posts as $post)
<div class="card mb-3">
    <div class="card-body">
        <p class="text-muted mb-1">
            {{ $post->published_at->toFormattedDateString() }}

            @if (!!$post->category)
            / <a href="#" class="card-link">{{ $post->category->name }}</a>
            @endif

            @if ($post->published_at->diffInDays(now()) < 3) <span
                class="badge badge-warning align-middle d-inline ml-2">New</span>
                @endif
        </p>
        <h4 class="mb-0">
            <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        </h4>
    </div>
</div>
@endforeach
<div class="text-right">
    {{ $posts->links() }}
</div>
@endsection