@include('partials.guest.top-nav')

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
            <div class="col-sm">
                <nav class="navbar navbar-expand navbar-light p-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav py-2 mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary ml-3" href="#">Pricing</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

@include('partials.guest.main-nav')