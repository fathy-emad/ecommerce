@extends('layouts.web.web')

@section('title', 'Web site')

@section('content')

    @include('components.web.slider')

    @include('components.swipers.allCategories', [
        'data' => [],
        'title' => 'All Categories',
        'id' => 'allCategories'
    ]);

@endsection
