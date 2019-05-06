<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body onresize="backgroundSize()">
    <div id="app">
        <div class="main-bg" id="main-bg">

                <div class="main-content">

                    <div class="dark-bg main" id="dark-bg">
                        <div class="navigation" id="navigation">
                            <menus></menus>
                        </div>

                        @yield('content')
                    </div>

                </div>
        </div>
    </div>

    <script src="/js/app.js"></script>

    <script>
        function backgroundSize() {
            let darkBg = document.getElementById('dark-bg');

            if(window.location.href === 'http://bluebowfashion.com/') {
                let navHeight = document.getElementById('navigation').offsetHeight;
                let bannerHeight = document.getElementById('banner').offsetHeight;
                let backgroundHeight = navHeight + (bannerHeight * .65);

                darkBg.style.height = backgroundHeight + 'px';
            } else {
                darkBg.style.height = 100 + 'vh';
            }
        }

        backgroundSize();
    </script>
</body>

</html>
