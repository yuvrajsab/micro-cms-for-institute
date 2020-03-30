@extends('layouts.guest.post')

@section('postContent')

<div>
    <h1 class="card-title">{{ $post->title }}</h1>

    <p class="text-muted">
        @if ($post->published_at)
        {{ $post->published_at->toFormattedDateString() }}
        @else
        Last Modified {{ $post->updated_at->diffForHumans() }}
        @endif

        @if (!!$post->category)
        / <a href="#" class="card-link">{{ $post->category->name }}</a>
        @endif

        @if (!$post->published_at)
        <span class="badge badge-danger align-middle d-inline ml-2">Draft</span>
        @endif
    </p>

    <hr>
</div>

<article class="post-content">
    {!! $post->body !!}
</article>

@endsection