@extends('layouts.admin')

@section('content')

<h1 class="display-4">Edit Page</h1>

<hr>

@form(['action' => route('admin.pages.update', $page), 'method' => 'PATCH'])
@inputGroup(['title' => 'Name', 'name' => 'name', 'attributes' => 'autocomplete="off"'])
{{ $page->name }}
@endinputGroup

<div class="form-group">
    <label for="content">Content</label>

    <editor-component id="content" name="content" old-value="{{ old('content', $page->content) }}"></editor-component>

    @error('content')
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