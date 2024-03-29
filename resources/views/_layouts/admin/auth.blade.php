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

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('assets/js/_vendor/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/_vendor/jquery-3.6.3.min.js') }}"></script>

</head>
<body dir="{{ $dir }}">

    <div class="container bg-white rounded shadow-lg mt-5 mb-5 bg-body">

        <div id='loadhalaman'>
            <div class='loadball'></div>
            <div class='loadball-2'></div>
            <p class="h6 text-muted">LOADING...</p>
        </div>

        <div class="row text-center">
            <div class="col-md mx-auto">
                <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('assets/images/web/auth/auth_logo.png') }}" class="rounded logo_image" alt="logo"></a>
            </div>
        </div>

        <div class="border-bottom border-info opacity-05 text-center mb-5"></div>

        @yield('content')

        <div class="border-bottom border-info opacity-05"></div>

        <div class="d-grid col-md mx-auto text-center mt-2">
            <p> @lang('common.copyRights') </p>
            <p> @lang('common.languages') :
                <a href="{{ route('changeLocale', ['locale' => 'ar']) }}" @class(['opacity-05' => $lang != 'en'])> @lang('common.arabic') </a> ,
                <a href="{{ route('changeLocale', ['locale' => 'en']) }}" @class(['opacity-05' => $lang == 'en'])> @lang('common.english') </a>
            </p>
        </div>
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('assets/js/_vendor/pageLoader.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/_vendor/validator.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/_vendor/main.js') }}"></script>

</body>
</html>
