<!doctype html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    @yield('content')

    @include ('pages.intro')

    @include ('pages.gallery')

    @include ('pages.contact')

    @include ('pages.about')
</body>
</html>
