@extends('layouts.master')

@section('title', 'Welcome to')

@section('content')

    <div class="banner" id="banner">
        <img src="/images/banner/banner_2.jpg" alt="Three brides wearing wedding veils" class="banner-img">
    </div>

    <div class="fancy-line col-md-12">
        <img src="/images/bow_fancy_line.png" class="col-md-7" alt="">
    </div>

    <carousel></carousel>

    <div class="dark-bg">
        <div class="gradient-bg">
            @include('pages.contact')

            <about></about>
        </div>
    </div>
@endsection
