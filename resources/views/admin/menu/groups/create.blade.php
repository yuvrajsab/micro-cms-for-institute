@extends('layouts.admin')

@section('content')

<h1 class="display-4">New Menu Group</h1>

<hr>

@form(['action' => route('admin.menu-groups.store'), 'method' => 'POST'])
    @inputGroup(['title' => 'Name', 'name' => 'name', 'attributes' => 'autocomplete="off"'])
    @endinputGroup

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
