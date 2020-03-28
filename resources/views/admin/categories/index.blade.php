@extends('layouts.admin')

@section('content')

<h1 class="display-4 d-flex align-items-baseline justify-content-between">
    Categories
    <div>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
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
        @foreach ($categories as $category)
        <tr>
            <th scope="row">{{ $category->id }}</th>
            <td>
                <strong><a href="#">{{ $category->name }}</a></strong>
                <p v-show="false" class="text-justify">{{ $category->description }}</p>
            </td>
            <td>{{ $category->creator->name }}</td>
            <td>
                <abbr title="{{ $category->created_at->toDateTimeString() }}" class="initialism">
                    {{ $category->created_at->toDateString() }}
                </abbr>
            </td>
            <td>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-default"
                        role="button">
                        @include('svg.edit', ['classes' => 'text-warning'])
                    </a>
                    <form action="{{ route('admin.categories.destroy', $category) }}" method="post">
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