<nav class="navbar navbar-expand navbar-light bg-light py-0">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                @foreach (App\Navigation::getSecondaryMenu() as $navItem)
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
            </ul>
            <span class="navbar-text text-dark d-block">
                <i>Call us today:</i> <strong>800-123-456</strong>
            </span>
            @auth
            <li class="bg-secondary ml-2 list-unstyled">
                <a class="nav-link text-white" href="{{ route('admin.dashboard') }}">Admin Panel</a>
            </li>
            @endauth
        </div>
    </div>
</nav>
