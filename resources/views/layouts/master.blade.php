<!doctype html>
<html lang="{{ app()->getLocale() }}" class="h-100">
<head>
    @include('partials.head')
    @yield('stylesheets')
</head>

<body class="d-flex flex-column h-100">
        @include('partials.header')
        <main role="main" class="flex-shrink-0">
            @yield('content')
        </main>
        @include('partials.footer')

@yield('scripts')
</body>
</html>