@php
    $lang = app()->getLocale();
    $dir = $lang == 'en' ? 'ltr' : 'rtl';
@endphp
    <!DOCTYPE html>
<html lang="{{ $lang }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('fonts/bootstrap-icons/bootstrap-icons.css') }}">

    <!-- Styles -->
    @if($lang == 'en')
        <link rel="stylesheet" href="{{ asset('css/_vendor/bootstrap.min.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/_vendor/bootstrap.rtl.min.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('css/_vendor/pageLoader.css') }}">
    <link rel="stylesheet" href="{{ asset('css/_vendor/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/main.css') }}">
    @yield('styles')

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/_vendor/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/_vendor/jquery-3.6.3.min.js') }}"></script>

</head>
<body dir="{{ $dir }}">

<div id='loadhalaman'>
    <div class='loadball'></div>
    <div class='loadball-2'></div>
    <p class="h6 text-muted">LOADING...</p>
</div>

@include('components.navbar-web')

@yield('content')

<!-- Scripts -->
<script type="text/javascript" src="{{ asset('js/_vendor/pageLoader.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/_vendor/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/web/main.js') }}"></script>
@yield('scripts')
</body>
</html>
