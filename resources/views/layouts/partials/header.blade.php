<div class="bg-light px-5 py-1 d-flex justify-content-between align-items-center">
    <small>(011)23455</small>
    <small>cs.du.ac.in@gmail.com</small>
    @guest
    <a href="{{ route('login') }}">Login</a>
    @else
    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @endguest
</div>

<header class="py-3 bg-dark text-white">
    <div class="container d-flex align-items-center">
        <img class="" width="80" height="80" src="{{ asset('img/logo.png') }}">
        <div class="ml-4 mb-0">
            <p class="h4 mb-0 font-weight-bold">
                Department of computer science <br>
                University of delhi, <br>
                Delhi, India
            </p>
        </div>
    </div>
</header>