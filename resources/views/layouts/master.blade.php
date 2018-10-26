<!doctype html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>

    <div class="light-bg container-fluid">

        <div class="dark-bg-master"></div>

        <div class="master-content">
            <div class="navigation">
                @include('partials.header')
            </div>

            <div class="page-content white-border">
                @yield('content')
            </div>
        </div>

    </div>

</body>
</html>
