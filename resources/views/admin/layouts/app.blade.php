<!doctype html>
<html class="h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-white h-100">
    <div id="app" class="h-100">


        {{-- <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <span class="navbar-brand mb-0 h1">Navbar</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                </ul>
                <span class="navbar-text">
                    search
                </span>
            </div>
        </nav> --}}

        <div class="row no-gutters h-100">
            <div class="col-lg-2 col-md-3 d-none d-md-block">
                <div class="navbar navbar-dark bg-primary-dark">
                    <span class="navbar-brand m-0 h1">Navbar</span>
                </div>
                <nav class="navbar navbar-light bg-light sidebar-nav border-right align-content-start">
                    <div class="show" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link d-flex align-items-center" href="#">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Posts</a>
                            </li>
                            <li class="nav-item dropdown dropright">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </a>
                                <div class="dropdown-menu position-absolute" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <form class="my-2">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>

            <div class="col-sm">

                <nav class="navbar navbar-expand navbar-dark bg-primary">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        </ul>
                        <div class="dropdown">
                            <button class="btn btn-primary-dark dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                yuvraj
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="px-4 py-2">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, modi velit numquam, voluptatum
                        ipsum quasi expedita autem quibusdam fuga ad, odit est veniam a animi accusantium adipisci?
                        Cupiditate, quam. Sapiente!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, modi velit numquam, voluptatum
                        ipsum quasi expedita autem quibusdam fuga ad, odit est veniam a animi accusantium adipisci?
                        Cupiditate, quam. Sapiente!
                    </p>
                </div>

            </div>
        </div>

    </div>
</body>

</html>