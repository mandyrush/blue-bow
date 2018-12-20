@extends('layouts.master')

@section('title', 'Welcome to')

@section('content')
    <div class="light-bg container-fluid">

        <div class="dark-bg home"></div>

        <div class="master-content">

            <div class="navigation home-menu">
                @include('partials.header')
            </div>

            <div class="banner">
                <img src="/images/banner.jpg" alt="Three brides wearing wedding veils" class="banner-img">
            </div>
        </div>

    </div>

@endsection
