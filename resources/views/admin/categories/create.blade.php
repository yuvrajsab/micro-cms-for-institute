@extends('layouts.admin')

@section('content')

<h1 class="display-4">New Category</h1>

<hr>

@form(['action' => route('admin.categories.store'), 'method' => 'POST'])
@inputGroup(['title' => 'Name', 'name' => 'name'])
@endinputGroup

@textareaGroup(['title' => 'Description', 'name' => 'description', 'attributes' => 'rows=5'])
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