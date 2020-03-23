@extends('layouts.app')

@section('content')

@auth
    @linkButton(['to' => route('posts.create'), 'color' => 'secondary'])
        New Post
    @endlinkButton
@endauth

@foreach ($posts as $post)
    @card(['id' => $post->id])
        @slot('header')
            {{ $post->title }}
            @auth
                @linkButton(['to' => route('posts.edit', $post), 'color' => 'secondary', 'classes' => 'btn-sm'])
                    Edit
                @endlinkButton
                @form(['action' => route('posts.delete', $post), 'classes' => 'd-inline', 'method' => 'DELETE'])
                    @button(['type' => 'submit', 'color' => 'danger', 'classes' => 'btn-sm'])
                        Delete
                    @endbutton
                @endform
            @endauth
        @endslot

        <p class="card-text">{{ $post->body }}</p>
    @endcard
@endforeach

@endsection
