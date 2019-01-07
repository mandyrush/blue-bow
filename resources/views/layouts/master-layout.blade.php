<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    @yield('content')

    @include ('pages.carousel')

    <div class="dark-bg">
        <div class="gradient-bg">
            @include ('pages.contact')

            @include ('pages.about')
        </div>
    </div>
</body>
</html>
