@extends('layouts.admin')

@section('content')

<h1 class="display-4">New Menu Items</h1>

<hr>

@form(['action' => route('admin.menu-items.update', $item), 'method' => 'PATCH'])
@inputGroup(['title' => 'Name', 'name' => 'name', 'attributes' => 'autocomplete="off"'])
{{ $item->name }}
@endinputGroup

<div class="form-group">
    <label for="formGroupExampleInput">Type</label>
    <div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="type" id="type_primary" value="primary"
                {{ $item->type === 'primary' ? 'checked' : '' }}>
            <label class="form-check-label" for="type_primary">
                Primary
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="type" id="type_secondary" value="secondary"
                {{ $item->type === 'secondary' ? 'checked' : '' }}>
            <label class="form-check-label" for="type_secondary">
                Secondary
            </label>
        </div>
    </div>
</div>

@inputGroup(['title' => 'Url', 'name' => 'url'])
{{ $item->url }}
@endinputGroup

@selectGroup(['title' => 'Group', 'name' => 'group_id'])
<option value="">-</option>
@foreach ($menuGroups as $group)
<option value="{{ $group->id }}" {{ $item->group_id === $group->id ? 'selected' : '' }}>{{ $group->name }}</option>
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
