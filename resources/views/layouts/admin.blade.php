<!doctype html>
<html class="h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') . ' Admin' }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body class="bg-white h-100">
    <div id="app" class="h-100">

        @include('flash::message')

        <div class="row no-gutters h-100">
            <div class="col-lg-2 col-md-3 d-none d-md-block">

                @include('partials.admin.sidebar-nav')

            </div>

            <div class="col-sm">

                @include('partials.admin.header-nav')

                <div class="px-4 py-2">

                    @yield('content')

                </div>

            </div>
        </div>

    </div>

    @stack('scripts')
</body>

</html>