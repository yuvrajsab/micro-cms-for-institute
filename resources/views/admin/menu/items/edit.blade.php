@extends('layouts.admin')

@section('content')

<h1 class="display-4">New Menu Items</h1>

<hr>

@form(['action' => route('admin.menu-items.update', $item), 'method' => 'PATCH'])
    @inputGroup(['title' => 'Name', 'name' => 'name', 'attributes' => 'autocomplete="off"'])
        {{ $item->name }}
    @endinputGroup

    @inputGroup(['title' => 'Url', 'name' => 'url'])
        {{ $item->url }}
    @endinputGroup

    @selectGroup(['title' => 'Group', 'name' => 'group_id'])
        <option value="">-</option>
        @foreach ($menuGroups as $group)
            <option value="{{ $group->id }}" {{ $item->group_id === $group->id ? 'selected' : '' }}>
                {{ $group->name }}
            </option>
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
