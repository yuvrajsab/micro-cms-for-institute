<nav class="navbar navbar-expand-sm navbar-dark bg-primary" style="background: navy">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}">Home</a></li>
                @foreach (App\Navigation::getMainNav() as $navItem)
                @if (!!$navItem->items)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ $navItem->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($navItem->items as $item)
                        <a class="dropdown-item" href="{{ $item->url }}">{{ $item->name }}</a>
                        @endforeach
                    </div>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ $navItem->url }}">{{ $navItem->name }}</a>
                </li>
                @endif
                @endforeach
                <li class="nav-item"><a class="nav-link" href="#">Latest Posts</a></li>
            </ul>
            <span class="navbar-text">
                search
            </span>
        </div>
    </div>
</nav>