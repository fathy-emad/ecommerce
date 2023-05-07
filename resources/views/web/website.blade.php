@extends('_layouts.web.web')

@section('title', 'Web site')

@section('content')

    @include('_components.web.slider')

    @include('_components.swipers.allCategories', [
        'data' => [],
        'title' => 'All Categories',
        'id' => 'allCategories'
    ]);

@endsection
