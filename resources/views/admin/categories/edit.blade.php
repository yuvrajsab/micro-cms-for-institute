@extends('layouts.admin')

@section('content')

<h1 class="display-4">Edit Category</h1>

<hr>

@form(['action' => route('admin.categories.update', $category), 'method' => 'PATCH'])
@inputGroup(['title' => 'Name', 'name' => 'name'])
{{ $category->name }}
@endinputGroup

@textareaGroup(['title' => 'Description', 'name' => 'description', 'attributes' => 'rows=5'])
{{ $category->description }}
@endtextareaGroup

<div class="mt-4">
    @button(['type' => 'submit'])
    Save
    @endbutton

    @linkButton(['to' => route('admin.categories.index')])
    Cancel
    @endlinkButton
</div>
@endform

@endsection