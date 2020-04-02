@extends('layouts.admin')

@section('content')

<h1 class="display-4 d-flex align-items-baseline justify-content-between">
    Pages
    <div>
        <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">
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
            <th scope="col">Created By</th>
            <th scope="col">Created At</th>
            <th scope="col" class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pages as $page)
        <tr>
            <th scope="row">{{ $page->id }}</th>
            <td>
                <strong><a href="{{ $page->url }}">{{ $page->name }}</a></strong>
                <p class="text-muted mb-0">@include('svg.link') {{ $page->url }}</p>
            </td>
            <td>{{ $page->creator->name }}</td>
            <td>
                <abbr title="{{ $page->created_at->toDateTimeString() }}" class="initialism">
                    {{ $page->created_at->toDateString() }}
                </abbr>
            </td>
            <td>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.pages.edit', $page) }}" class="btn btn-sm btn-default" role="button">
                        @include('svg.edit', ['classes' => 'text-warning'])
                    </a>
                    <form action="{{ route('admin.pages.destroy', $page) }}" method="post">
                        @csrf @method('DELETE')

                        <button class="btn btn-sm btn-default">
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