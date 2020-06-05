@extends('layouts.admin')

@section('content')

<h1 class="display-4 d-flex align-items-baseline justify-content-between">
    Menu Items
    <div>
        <a href="{{ route('admin.menu-items.create') }}" class="btn btn-primary">
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
            <th scope="col">Url</th>
            <th scope="col">Group</th>
            <th scope="col">Date</th>
            <th scope="col" class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($menuItems as $item)
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>
                <strong>
                    <a href="#">{{ $item->name }}</a>
                </strong>
            </td>
            <td>
                <p class="text-muted mb-0">
                    @include('svg.link') <a href="{{ $item->url }}">{{ $item->url }}</a>
                </p>
            </td>
            <td>{{ $item->group->name ?? '-' }}</td>
            <td>
                <abbr title="{{ $item->created_at->toDateTimeString() }}" class="initialism">
                    {{ $item->created_at->toDateString() }}
                </abbr>
            </td>
            <td>
                <div class="d-flex justify-content-end">
                    <a title="Edit" href="{{ route('admin.menu-items.edit', $item) }}"
                        class="btn btn-sm btn-default mx-1" role="button">
                        @include('svg.edit', ['classes' => 'text-warning'])
                    </a>
                    <form action="{{ route('admin.menu-items.destroy', $item) }}" method="post">
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
