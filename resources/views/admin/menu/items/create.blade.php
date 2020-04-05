@extends('layouts.admin')

@section('content')

<h1 class="display-4">New Menu Items</h1>

<hr>

@form(['action' => route('admin.menu-items.store'), 'method' => 'POST'])
@inputGroup(['title' => 'Name', 'name' => 'name', 'attributes' => 'autocomplete="off"'])
@endinputGroup

<div class="form-group">
    <label for="formGroupExampleInput">Location</label>
    <div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="location" id="location_main" value="main" checked>
            <label class="form-check-label" for="location_main">
                Main
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="location" id="location_top" value="top">
            <label class="form-check-label" for="location_top">
                Top
            </label>
        </div>
    </div>
</div>

@inputGroup(['title' => 'Url', 'name' => 'url'])
@endinputGroup

@selectGroup(['title' => 'Group', 'name' => 'group_id'])
<option value="">-</option>
@foreach ($menuGroups as $group)
<option value="{{ $group->id }}">{{ $group->name }}</option>
@endforeach
@endselectGroup


<div class="my-4">
    @button(['type' => 'submit'])
    Save
    @endbutton

    @linkButton(['to' => route('admin.menu-items.index')])
    Cancel
    @endlinkButton
</div>
@endform
@endsection