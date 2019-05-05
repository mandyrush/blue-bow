<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    <div id="app">
        <div class="main-bg" id="main-bg">

            <div class="main-content">
                <div class="navigation">
                    <menus></menus>
                </div>

                @yield('content')
            </div>

            <div class="dark-bg main"></div>

            <div class="lt-bg"></div>
        </div>
    </div>

    <script src="/js/app.js"></script>
</body>

</html>
