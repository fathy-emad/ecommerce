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
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <!-- Styles -->
    @if($lang == 'en')
        <link rel="stylesheet" href="{{ asset('css/_vendor/bootstrap.min.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/_vendor/bootstrap.rtl.min.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('css/_vendor/pageLoader.css') }}">
    <link rel="stylesheet" href="{{ asset('css/_vendor/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/_vendor/swiper.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/web/main.css') }}">

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/_vendor/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/_vendor/jquery-3.6.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/_vendor/swiper.js') }}"></script>

</head>
<body dir="{{ $dir }}">

<div id='loadhalaman'>
    <div class='loadball'></div>
    <div class='loadball-2'></div>
    <p class="h6 text-muted">LOADING...</p>
</div>

@include('components.admin.header')

@yield('content')

@include('components.admin.footer')

<!-- Scripts -->
<script type="text/javascript" src="{{ asset('js/_vendor/pageLoader.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/_vendor/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/web/main.js') }}"></script>
</body>
</html>
