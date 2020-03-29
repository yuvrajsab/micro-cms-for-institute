@extends('layouts.admin')

@section('content')

<h1 class="display-4">New Post</h1>

<hr>

@form(['action' => route('admin.posts.store'), 'method' => 'POST'])
@inputGroup(['title' => 'Title', 'name' => 'title', 'attributes' => 'autocomplete="off"'])
@endinputGroup

@selectGroup(['title' => 'Category', 'name' => 'category_id'])
@foreach ($categories as $category)
<option value="{{ $category->id }}">{{ $category->name }}</option>
@endforeach
@endselectGroup

<div class="form-group">
    <label for="body">Body</label>

    <editor-component id="body" name="body" old-value="{{ old('body') }}"></editor-component>

    @error('body')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="my-4">
    @button(['type' => 'submit'])
    Save Draft
    @endbutton

    @linkButton(['to' => route('admin.posts.index')])
    Cancel
    @endlinkButton
</div>
@endform
@endsection