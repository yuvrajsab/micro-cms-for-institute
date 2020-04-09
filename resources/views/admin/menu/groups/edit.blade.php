@extends('layouts.admin')

@section('content')

<h1 class="display-4">New Menu Group</h1>

<hr>

@form(['action' => route('admin.menu-groups.update', $group), 'method' => 'PATCH'])
@inputGroup(['title' => 'Name', 'name' => 'name', 'attributes' => 'autocomplete="off"'])
{{ $group->name }}
@endinputGroup

<div class="form-group">
    <label for="formGroupExampleInput">Location</label>
    <div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="location" id="location_main" value="main"
                {{ $group->location === 'main' ? 'checked' : '' }}>
            <label class="form-check-label" for="location_main">
                Main
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="location" id="location_top" value="top"
                {{ $group->location === 'top' ? 'checked' : '' }}>
            <label class="form-check-label" for="location_top">
                Top
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
