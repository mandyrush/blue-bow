<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    @yield('content')

    <div class="fancy-line col-md-12">
        <img src="/images/bow_fancy_line.png" class="col-md-7" alt="">
    </div>

    @include ('pages.carousel')

    <div class="dark-bg">
        <div class="gradient-bg">
            @include ('pages.contact')

            @include ('pages.about')
        </div>
    </div>
</body>
</html>
