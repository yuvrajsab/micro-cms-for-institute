@extends('layouts.admin')

@section('content')

<h1 class="display-4">New Menu Group</h1>

<hr>

@form(['action' => route('admin.menu-groups.store'), 'method' => 'POST'])
@inputGroup(['title' => 'Name', 'name' => 'name', 'attributes' => 'autocomplete="off"'])
@endinputGroup

<div class="form-group">
    <label for="formGroupExampleInput">Type</label>
    <div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="type" id="type_primary" value="primary" checked>
            <label class="form-check-label" for="type_primary">
                Primary
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="type" id="type_secondary" value="secondary">
            <label class="form-check-label" for="type_secondary">
                Secondary
            </label>
        </div>
    </div>
</div>

<div class="my-4">
    @button(['type' => 'submit'])
    Save
    @endbutton

    @linkButton(['to' => route('admin.menu-groups.index')])
    Cancel
    @endlinkButton
</div>
@endform
@endsection
