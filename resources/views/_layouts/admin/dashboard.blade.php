@php
    $lang = app()->getLocale();
    $dir = $lang == 'en' ? 'ltr' : 'rtl';
    $flag = $lang !== 'en' ? 'language-en' : 'country-eg';
    $explode = explode('.', Route::current()->getName());
    $current_main = isset($explode[1]) && $explode[1]  ? $explode[1] : '';
    $current_sub = isset($explode[2]) && $explode[2]  ? $explode[2] : '';
    $current_page = isset($explode[3]) && $explode[3]  ? $explode[3] : '';
@endphp
<!DOCTYPE html>
<html lang="{{ $lang }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('pages.'."$current_main.$current_sub.$current_page") }}</title>

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
    <link rel="stylesheet" href="{{ asset('assets/css/_vendor/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/_vendor/pageLoader.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/_vendor/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin/main.css') }}">
    @yield('cssStyle')

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('assets/js/_vendor/jquery-3.6.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/_vendor/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/_vendor/select2.full.js') }}"></script>

</head>
<body dir="{{ $dir }}">

<div id='loadhalaman'>
    <div class='loadball'></div>
    <div class='loadball-2'></div>
    <p class="h6 text-muted">LOADING...</p>
</div>

@include('_components.admin.header', ['lang' => $lang, 'flag' => $flag])

<div class="container-fluid">

    <div class="d-flex mt-1 gap-2 justify-content-around p-1">
        <div class="col-lg-3 p-3 shadow bg-white rounded-1">
            @include('_components.admin.sidebar',[
                'current_main' => $current_main,
                'current_sub' => $current_sub,
                'current_page' => $current_page
             ])
        </div>

        <div class="col-lg-9">

            <div class="shadow bg-white rounded-1 p-3 mb-2">
                @include('_components.admin.breadcrumb',[
                    'current_main' => $current_main,
                    'current_sub' => $current_sub,
                    'current_page' => $current_page
                 ])
            </div>


            <div class="alert alert-dismissible shadow bg-white rounded-1 p-2 mb-2">
                @include('_components.admin.alert')
            </div>

            <div class="p-3 shadow bg-white rounded-1">
                @yield('content')
            </div>
        </div>
    </div>

</div>

@include('_components.admin.footer')

<!-- Scripts -->
<script type="text/javascript" src="{{ asset('assets/js/_vendor/pageLoader.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/_vendor/validator.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/_vendor/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/admin/main.js') }}"></script>
@yield('jsScripts')
</body>
</html>
