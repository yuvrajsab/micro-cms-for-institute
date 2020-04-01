<div class="card mb-3">
    <div class="card-header">Latest Posts</div>
    <div class="card-body py-0">
        <p class="card-text">
            @foreach (App\Post::whereNotNull('published_at')->orderBy('published_at', 'desc')->take($size ?? 10)->get()
            as $post)
            <p class="font-weight-semibold mb-0">
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>

                @if ($post->published_at->diffInDays(now()) < 3) <span class="badge badge-warning">New</span>
                    @endif
            </p>
            <hr class="my-2">
            @endforeach
            <p class="text-right mb-0"><small><a href="{{ route('posts.index') }}">View All</a></small></p>
        </p>
    </div>
</div>

<div class="card bg-warning mb-3">
    <div class="card-header">latest posts</div>
    <div class="card-body">
        <p class="card-text">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt illum harum
            voluptatibus odit error tempore. Modi beatae architecto quis assumenda mollitia. Rem
            adipisci, saepe facere vitae natus magnam distinctio possimus?
        </p>
    </div>
</div>