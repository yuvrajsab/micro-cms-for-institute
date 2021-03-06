<nav class="navbar navbar-expand navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Add New
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('admin.posts.create') }}">Post</a>
                    <a class="dropdown-item" href="{{ route('admin.categories.create') }}">Category</a>
                    <a class="dropdown-item" href="{{ route('admin.pages.create') }}">Page</a>
                    <a class="dropdown-item" href="{{ route('admin.menu-groups.create') }}">Menu Group</a>
                    <a class="dropdown-item" href="{{ route('admin.menu-items.create') }}">Menu Item</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Site</a></li>
        </ul>
        <div class="dropdown">
            <button class="btn btn-primary-dark dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ auth()->user()->name }}
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</nav>
