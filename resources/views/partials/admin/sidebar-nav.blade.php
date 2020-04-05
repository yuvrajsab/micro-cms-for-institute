<div class="navbar navbar-dark bg-primary-dark">
    <span class="navbar-brand m-0 h1">{{ config('app.name', 'Laravel') . ' Admin' }}</span>
</div>
<nav class="navbar navbar-light bg-light sidebar-nav border-right align-content-start">
    <div class="show" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                <a class="nav-link d-flex align-items-center" href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item {{ Route::is('admin.posts.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.posts.index') }}">Posts</a>
            </li>
            <li class="nav-item {{ Route::is('admin.categories.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.categories.index') }}">Categories</a>
            </li>
            <li class="nav-item {{ Route::is('admin.pages.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.pages.index') }}">Pages</a>
            </li>
            <li class="nav-item dropdown dropright {{ Route::is('admin.menu-*') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Menu
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('admin.menu-groups.index') }}">Groups</a>
                    <a class="dropdown-item" href="{{ route('admin.menu-items.index') }}">Items</a>
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