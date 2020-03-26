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
    <select name="category_id" class="form-control" id="exampleFormControlSelect1">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
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