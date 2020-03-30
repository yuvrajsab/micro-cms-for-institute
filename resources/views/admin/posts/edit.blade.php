@extends('layouts.admin')

@section('content')

<h1 class="display-4">Edit Post</h1>

<hr>

@form(['action' => route('admin.posts.update', $post), 'method' => 'PATCH'])
@inputGroup(['title' => 'Title', 'name' => 'title', 'attributes' => 'autocomplete="off"'])
{{ $post->title }}
@endinputGroup

@selectGroup(['title' => 'Category', 'name' => 'category_id'])
@foreach ($categories as $category)
<option value="{{ $category->id }}" @if($post->category->id == $category->id) selected @endif >
    {{ $category->name }}
</option>
@endforeach
@endselectGroup

<div class="form-group">
    <label for="body">Body</label>

    <editor-component id="body" name="body" old-value="{{ old('body', $post->body) }}"></editor-component>

    @error('body')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="my-4">
    @button(['type' => 'submit'])
    Update
    @endbutton

    @linkButton(['to' => route('admin.posts.index')])
    Cancel
    @endlinkButton
</div>
@endform
@endsection