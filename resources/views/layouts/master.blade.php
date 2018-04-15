<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('partials.head')
    @yield('stylesheets')
</head>

<body>
<div class="container">
    <header class="row">

        @include('partials.header')

    </header>
    <div id="main">
        @yield('content')
    </div>
    <footer>

        @include('partials.footer')

    </footer>
</div>

@yield('scripts')
</body>
</html>