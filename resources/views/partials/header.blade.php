<div class="nav-content">
    <header class="col-lg-5">
        <a href="/">
            <div class="logo title is-1">The Little Blue Bow</div>
            <div class="logo-description subtitle is-5">Handmade Wedding Veils and Accessories</div>

        </a>
    </header>
    <nav class="col-sm-5">
        <a href="/#carousel" class="nav-item is-size-4">My Work</a>
        <a href="/#contact-me" class="nav-item is-size-4">Contact Me</a>
        <a href="/#about-me" class="nav-item is-size-4">About Me</a>
    </nav>
</div>


<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        let currentScrollPos = window.pageYOffset;
        let navigation = document.querySelector('.navigation');

        if (prevScrollpos > currentScrollPos) {
            navigation.style.top = "0";
        } else {
            navigation.style.top = "-40vh";
        }
        prevScrollpos = currentScrollPos;


        let scrlTop = document.documentElement.scrollTop;
        let navContent = document.querySelector('.nav-content');

        if (scrlTop < 100) {
            navContent.style.padding = "4rem 0px 1.5rem 0px";
            navigation.style.display = "block";
            navigation.style.backgroundColor = "transparent";
            navContent.classList.remove("scrl-menu");

        } else if (scrlTop > 100 && scrlTop < window.innerHeight) {
            navigation.style.top = "-40vh";
        } else {
            navigation.style.display = "block";
            navContent.classList.add("scrl-menu");
            navContent.style.padding = "10px";
        }
    }


</script>
