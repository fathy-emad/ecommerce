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
    <link rel="stylesheet" href="{{ asset('assets/fonts/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/googleapis/roboto.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/googleapis/poppins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/googleapis/source.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">

    <!-- Styles -->
    @if($lang == 'en')
        <link rel="stylesheet" href="{{ asset('assets/css/_vendor/bootstrap.min.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/_vendor/bootstrap.rtl.min.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('assets/css/_vendor/pageLoader.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/_vendor/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/web/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/_vendor/swiper.css') }}"/>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('assets/js/_vendor/swiper.js') }}"></script>

</head>
<body dir="{{ $dir }}">

<div id='loadhalaman'>
    <div class='loadball'></div>
    <div class='loadball-2'></div>
    <p class="h6 text-muted">LOADING...</p>
</div>

@include('_components.web.header')

@yield('content')

@include('_components.web.footer')

<!-- Scripts -->
<script type="text/javascript" src="{{ asset('assets/js/_vendor/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/_vendor/jquery-3.6.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/_vendor/pageLoader.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/_vendor/main.js') }}"></script>

</body>
</html>
