@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-8 mx-auto">

        @card
            @slot('header')
                Create Post
            @endslot

            @form(['action' => route('posts'), 'method' => 'POST'])
                @inputGroup(['title' => 'Title', 'name' => 'title'])
                @endinputGroup

                @textareaGroup(['title' => 'Body', 'name' => 'body'])                
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