<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    <div id="app">
        <div class="main-bg">

            <div class="main-content">
                <div class="navigation">
                    <main-menu></main-menu>
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
