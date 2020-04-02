@extends('layouts.admin')

@section('content')

<h1 class="display-4">New Page</h1>

<hr>

@form(['action' => route('admin.pages.store'), 'method' => 'POST'])
@inputGroup(['title' => 'Name', 'name' => 'name', 'attributes' => 'autocomplete="off"'])
@endinputGroup

<div class="form-group">
    <label for="content">Content</label>

    <editor-component id="content" name="content" old-value="{{ old('content') }}"></editor-component>

    @error('content')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="my-4">
    @button(['type' => 'submit'])
    Save
    @endbutton

    @linkButton(['to' => route('admin.posts.index')])
    Cancel
    @endlinkButton
</div>
@endform
@endsection