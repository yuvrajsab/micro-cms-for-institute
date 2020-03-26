@extends('layouts.admin')

@section('content')

<h1 class="display-4">New Category</h1>

<hr>

@form(['action' => route('admin.categories.store'), 'method' => 'POST'])
@inputGroup(['title' => 'Name', 'name' => 'name'])
@endinputGroup

@inputGroup(['title' => 'Slug', 'name' => 'slug'])
@endinputGroup

@textareaGroup(['title' => 'Description', 'name' => 'description'])
@endtextareaGroup

<div class="mt-4">
    @button(['type' => 'submit'])
    Submit
    @endbutton

    @linkButton(['to' => route('admin.categories.index')])
    Cancel
    @endlinkButton
</div>
@endform

@endsection