@php
    $lang = app()->getLocale();
    $dir = $lang == 'en' ? 'ltr' : 'rtl';
    $flag = $lang !== 'en' ? 'language-en' : 'country-eg';
@endphp
    <!DOCTYPE html>
<html lang="{{ $lang }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/bootstrap-icons/bootstrap-icons.css') }}">
    <link href="{{ asset('assets/fonts/fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fonts/googleapis/nunito.css') }}" rel="stylesheet">

    <!-- Styles -->
    @if($lang == 'en')
        <link rel="stylesheet" href="{{ asset('assets/css/_vendor/bootstrap.min.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/_vendor/bootstrap.rtl.min.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('assets/css/_vendor/pageLoader.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/_vendor/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin/main.css') }}">

</head>
<body dir="{{ $dir }}">

<div id='loadhalaman'>
    <div class='loadball'></div>
    <div class='loadball-2'></div>
    <p class="h6 text-muted">LOADING...</p>
</div>

@include('_components.admin.header', ['lang' => $lang, 'flag' => $flag])

<div class="container-fluid">

    <div class="d-flex mt-3 justify-content-around">
        <div class="col-lg-2 shadow bg-white rounded-1">
            @include('_components.admin.sidebar')
        </div>

        <div class="col-lg-9 shadow bg-white rounded-1">
            @yield('content')
        </div>
    </div>

</div>

@include('_components.admin.footer')

<!-- Scripts -->
<!-- Scripts -->
<script type="text/javascript" src="{{ asset('assets/js/_vendor/jquery-3.6.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/_vendor/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/_vendor/pageLoader.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/_vendor/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/admin/main.js') }}"></script>
</body>
</html>
