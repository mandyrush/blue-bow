<!doctype html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>

    <div class="dark-bg master container-fluid"></div>

    <div class="master-content">
        <div class="navigation">
            @include('partials.header')
        </div>

        <div class="page-content">
            @yield('content')
        </div>
    </div>

</body>
</html>
