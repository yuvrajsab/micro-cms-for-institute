@include('partials.guest.secondary-nav')

<div class="bg-white py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-sm d-flex align-items-center">
                <img width="80" height="80" src="https://via.placeholder.com/80">
                <div class="ml-4">
                    <h2>Heading Large</h2>
                    <p class="lead mb-0">Tagline</p>
                </div>
            </div>
            <div class="col-sm text-right">
                <a href="{{ route('posts.index') }}" class="btn btn-primary px-4" href="#" role="button"
                    style="cursor: pointer">Posts</a>
            </div>
        </div>
    </div>
</div>

@include('partials.guest.primary-nav')
