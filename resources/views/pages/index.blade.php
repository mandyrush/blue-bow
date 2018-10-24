@extends('layouts.master')

@section('title', 'Welcome to')

@section('content')
    <div class="container-fluid light-bg">

        <div class="dark-bg"></div>

        <div class="featured-content">

            <div class="row navigation">
                <header><a href="/">Blue Bow Montana</a></header>
                <nav>
                    <a href="/gallery" class="nav-item">Gallery</a>
                    <a href="/about" class="nav-item">About</a>
                    <a href="/contact" class="nav-item">Contact</a>
                </nav>
            </div>

            <div class="white-border">
                <div class="image1"></div>
                <div class="image2"></div>
                <div class="image3"></div>
            </div>
        </div>

    </div>
@endsection
