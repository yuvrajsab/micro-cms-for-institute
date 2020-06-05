<nav class="navbar navbar-expand navbar-light bg-light py-0">
    <div class="container">
        <span class="navbar-text w-100">
            Anything you want
        </span>
        <ul class="navbar-nav">
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">Admin</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
