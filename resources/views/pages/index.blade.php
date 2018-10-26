@extends('layouts.home')

@section('title', 'Welcome to')

@section('content')
    <div class="container-fluid light-bg">

        <div class="dark-bg"></div>

        <div class="featured-content">

            <div class="navigation home-header">
                @include('partials.header')
            </div>

            <div class="white-border">
                <div class="image1"></div>
                <div class="image2"></div>
                <div class="image3"></div>
            </div>
        </div>

    </div>
@endsection
