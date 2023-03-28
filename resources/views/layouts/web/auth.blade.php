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
    <link rel="stylesheet" href="{{ asset('css/web/login-register.css') }}">
    @yield('styles')

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/_vendor/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/_vendor/jquery-3.6.3.min.js') }}"></script>

</head>
<body dir="{{ $dir }}">

    <div class="container bg-white rounded shadow-lg mt-5 mb-5 bg-body full_width">

        <div id='loadhalaman'>
            <div class='loadball'></div>
            <div class='loadball-2'></div>
            <p class="h6 text-muted">LOADING...</p>
        </div>

        <div class="row text-center">
            <div class="col-md mx-auto">
                <a href="/"><img src="{{ asset('images/web/auth/auth_logo.png') }}" class="rounded logo_image" alt="logo"></a>
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
    <script type="text/javascript" src="{{ asset('js/_vendor/pageLoader.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/_vendor/validator.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/web/login-register.js') }}"></script>
    @yield('scripts')
</body>
</html>
