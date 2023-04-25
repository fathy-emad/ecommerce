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
    <link href="{{ asset('fonts/fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('fonts/googleapis/nunito.css') }}" rel="stylesheet">

    <!-- Styles -->
    @if($lang == 'en')
        <link rel="stylesheet" href="{{ asset('css/_vendor/bootstrap.min.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/_vendor/bootstrap.rtl.min.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('css/_vendor/pageLoader.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/main.css') }}">

</head>
<body dir="{{ $dir }}" id="page-top">

    <div id='loadhalaman'>
        <div class='loadball'></div>
        <div class='loadball-2'></div>
        <p class="h6 text-muted">LOADING...</p>
    </div>

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('components.admin.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('components.admin.header')
                @yield('content')
            </div>

            @include('components.admin.footer')
        </div>
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/_vendor/jquery-3.6.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/_vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/_vendor/Chart.js') }}"></script>
    <script src="{{ asset('js/_vendor/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/_vendor/chart-pie-demo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/_vendor/pageLoader.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/_vendor/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/main.js') }}"></script>

</body>
</html>
