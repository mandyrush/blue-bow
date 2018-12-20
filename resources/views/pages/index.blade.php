@extends('layouts.master')

@section('title', 'Welcome to')

@section('content')
    <div class="light-bg container-fluid">

        <div class="dark-bg home"></div>

        <div class="master-content">

            <div class="navigation home-menu">
                @include('partials.header')
            </div>

            <div class="featured-images white-border">
                <figure class="image1"></figure>
                <figure class="image2"></figure>
                <figure class="image3"></figure>
            </div>
        </div>

    </div>

@endsection
