@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-8 mx-auto">

        @card
            @slot('header')
                Edit Post
            @endslot

            @form(['action' => route('posts.update', $post), 'method' => 'PATCH'])
                @inputGroup(['title' => 'Title', 'name' => 'title'])
                    {{ $post->title }}
                @endinputGroup

                @textareaGroup(['title' => 'Body', 'name' => 'body'])
                    {{ $post->body }}
                @endtextareaGroup

                @button(['type' => 'submit'])
                    Submit
                @endbutton

                @linkButton(['to' => route('posts')])
                    Cancel
                @endlinkButton
            @endform
        @endcard
    </div>
</div>

@endsection