<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    @yield('content')

    @include ('pages.carousel')

    <div class="dark-bg">
        @include ('pages.contact')

        @include ('pages.about')
    </div>

</body>
</html>
