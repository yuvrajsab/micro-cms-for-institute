@extends('layouts.admin')

@section('content')

<h1 class="display-4 d-flex align-items-baseline justify-content-between">
    Menu Groups
    <div>
        <a href="{{ route('admin.menu-groups.create') }}" class="btn btn-primary">
            @include('svg.add') <span class="align-middle">Add New</span>
        </a>
    </div>
</h1>

<hr>

<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Date</th>
            <th scope="col" class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($menuGroups as $group)
        <tr>
            <th scope="row">{{ $group->id }}</th>
            <td>
                <strong>
                    <a href="#">{{ $group->name }}</a>
                </strong>
            </td>
            <td>
                <abbr title="{{ $group->created_at->toDateTimeString() }}" class="initialism">
                    {{ $group->created_at->toDateString() }}
                </abbr>
            </td>
            <td>
                <div class="d-flex justify-content-end">
                    <a title="Edit" href="{{ route('admin.menu-groups.edit', $group) }}"
                        class="btn btn-sm btn-default mx-1" role="button">
                        @include('svg.edit', ['classes' => 'text-warning'])
                    </a>
                    <form action="{{ route('admin.menu-groups.destroy', $group) }}" method="post">
                        @csrf @method('DELETE')

                        <button title="Delete" class="btn btn-sm btn-default">
                            @include('svg.delete', ['classes' => 'text-danger'])
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
