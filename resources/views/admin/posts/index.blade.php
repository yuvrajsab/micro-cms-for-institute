@extends('layouts.admin')

@section('content')

<h1 class="display-4 d-flex align-items-baseline justify-content-between">
    Posts
    <div>
        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
            @include('svg.add') <span class="align-middle">Add New</span>
        </a>
    </div>
</h1>

<hr>

<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Category</th>
            <th scope="col">Date</th>
            <th scope="col" class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>
                <strong>
                    <a href="{{ route('admin.posts.show', $post) }}" target="_blank">{{ $post->title }}</a>
                    @if (!$post->published_at)
                    <span class="text-muted">--Draft</span>
                    @endif
                </strong>
            </td>
            <td>{{ $post->author->name }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
                @if (!$post->published_at)
                Last modified
                <abbr title="{{ $post->updated_at->toDateTimeString() }}" class="initialism">
                    {{ $post->updated_at->toDateString() }}
                </abbr>
                @else
                Published <br>
                <abbr title="{{ $post->published_at->toDateTimeString() }}" class="initialism">
                    {{ $post->published_at->toDateString() }}
                </abbr>
                @endif
            </td>
            <td>
                <div class="d-flex justify-content-end">
                    @if (!$post->published_at)
                    <a href="#" class="btn btn-sm btn-default" role="button">
                        Publish
                    </a>
                    @endif
                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-default" role="button">
                        @include('svg.edit', ['classes' => 'text-warning'])
                    </a>
                    <form action="{{ route('admin.posts.destroy', $post) }}" method="post">
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