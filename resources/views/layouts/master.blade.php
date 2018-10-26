<!doctype html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>

    <div class="light-bg container-fluid">

        <div class="navigation master-header">
            @include('partials.header')
        </div>

        @yield('content')
    </div>

</body>
</html>
