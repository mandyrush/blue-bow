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
                    @include('partials.header')
                </div>

                @yield('content')
            </div>

            <div class="dark-bg main"></div>

            <div class="lt-bg"></div>

        </div>
    </div>
</body>

</html>
