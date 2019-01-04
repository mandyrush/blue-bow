@extends('layouts.master-layout')

@section('title', 'Welcome to')

@section('content')

    <div class="dark-bg home">

        <div class="navigation">
            @include('partials.header')
        </div>

        <div class="banner">
            <img src="/images/banner/banner.jpg" alt="Three brides wearing wedding veils" class="banner-img">
        </div>

    </div>

@endsection
