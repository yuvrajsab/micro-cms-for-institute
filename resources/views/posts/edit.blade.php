@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                Edit Post
            </div>
            <div class="card-body">
                <form action="{{ route('posts.update', $post) }}" method="POST">
                    @csrf @method('PATCH')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" id="body" name="body">{{ $post->body }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('posts') }}" class="btn btn-default" role="button">Cancel</a>
                </form>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>

@endsection