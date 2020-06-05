@include('partials.guest.header-info')

<div class="bg-white py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 col-md-8 col-sm d-flex align-items-center">
                <img width="80" height="80" src="https://via.placeholder.com/80">
                <div class="ml-3">
                    <h3 class="mb-0">{{ config('app.name') }}</h3>
                </div>
            </div>
            <div class="col-sm d-flex justify-content-md-end justify-content-center">
                <form action="#" class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="search">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="1em" height="1em" fill="currentColor">
                                <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('partials.guest.navigation')
