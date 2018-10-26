@extends('layouts.home')

@section('title', 'Welcome to')

@section('content')
    <div class="light-bg container-fluid">

        <div class="dark-bg-home"></div>

        <div class="home-content">

            <div class="navigation home-menu">
                @include('partials.header')
            </div>

            <div class="featured-images white-border">
                <div class="image1"></div>
                <div class="image2"></div>
                <div class="image3"></div>
            </div>
        </div>

    </div>
@endsection
