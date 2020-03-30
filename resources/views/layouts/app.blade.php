<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body class="bg-light">
    <div id="app">

        @include('partials.guest.header')

        <main class="container my-3">
            <div class="row">
                <div class="col-md-4 col-lg-3">

                    @include('partials.guest.side-panel')

                </div>
                <div class="col-sm">

                    @yield('content')

                </div>
            </div>
        </main>


        @include('partials.guest.footer')
    </div>

    @stack('scripts')
</body>

</html>