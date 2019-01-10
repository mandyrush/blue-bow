<div class="nav-content">
    <header class="col-lg-5">
        <a href="/">
            <div class="logo static-logo title">The Little Blue Bow</div>
            <div class="logo-description subtitle is-5">Handmade Wedding Veils and Accessories</div>

        </a>
    </header>
    <nav class="col-sm-5">
        <a href="/#carousel" class="nav-item is-size-4">My Work</a>
        <a href="/#contact-me" class="nav-item is-size-4">Contact Me</a>
        <a href="/#about-me" class="nav-item is-size-4">About Me</a>
    </nav>
</div>

<i class="btn-to-top fas fa-angle-up"></i>


<script>
    let prevScrollpos = window.pageYOffset;

    window.onscroll = function() {

        let currentScrollPos = window.pageYOffset;
        let navigation = document.querySelector('.navigation');
        let btnToTop = document.querySelector('.btn-to-top');

        if (prevScrollpos > currentScrollPos) {
            navigation.style.top = '0px';
            btnToTop.style.display = 'block';
        } else {
            navigation.style.top = '-40vh';
            btnToTop.style.display = 'none';
        }

        prevScrollpos = currentScrollPos;

        if (document.documentElement.scrollTop < window.innerHeight) {
            btnToTop.style.display = 'none';
        }


        let scrlTop = document.documentElement.scrollTop;
        let navContent = document.querySelector('.nav-content');
        let logoDescription = document.querySelector('.logo-description');
        let logo = document.querySelector('.logo');

        if (scrlTop < 100) {
            navContent.style.padding = '4rem 0px 1.5rem 0px';
            navigation.style.display = 'block';
            navigation.style.backgroundColor = 'transparent';

            logoDescription.style.display = 'flex';
            logo.style.marginBottom = '1.5rem';

            logo.classList.remove('scrl-logo');
            logo.classList.add('static-logo');


        } else if (scrlTop > 100 && scrlTop < window.innerHeight) {
            navigation.style.top = '-40vh';
        } else {
            navContent.style.padding = '10px';
            navigation.style.display = 'block';
            navigation.style.backgroundColor = 'rgba(10, 51, 149, 1)';

            logoDescription.style.display = 'none';
            logo.style.marginBottom = '0px';

            logo.classList.remove('static-logo');
            logo.classList.add('scrl-logo');
        }


        btnToTop.onclick = function() {
            document.querySelector('.my-work-dkbg').scrollIntoView ({
                behavior: 'smooth'
            });
        };

    };

</script>
