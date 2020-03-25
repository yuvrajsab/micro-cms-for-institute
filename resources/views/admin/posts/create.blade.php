@extends('layouts.admin')

@section('content')

<h1 class="display-4">New Post</h1>

<hr>

@form(['action' => route('admin.posts.store'), 'method' => 'POST'])
@inputGroup(['title' => 'Title', 'name' => 'title'])
@endinputGroup

@inputGroup(['title' => 'Slug', 'name' => 'slug'])
@endinputGroup

<div class="form-group">
    <label for="exampleFormControlSelect1">Category</label>
    <select class="form-control" id="exampleFormControlSelect1">
        <option></option>
        <option>Draft</option>
        <option>Admission</option>
        <option>Pay</option>
        <option>Event</option>
        <option>Status</option>
    </select>
</div>

@textareaGroup(['title' => 'Body', 'name' => 'body'])
@endtextareaGroup

<div class="mt-4">
    @button(['type' => 'submit'])
    Submit
    @endbutton

    @linkButton(['to' => route('admin.posts.index')])
    Cancel
    @endlinkButton
</div>
@endform

@endsection