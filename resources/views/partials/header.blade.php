<div class="nav-content">
    <header class="col-lg-5">
        <a href="/">
            <div class="logo static-logo title">The Little Blue Bow</div>
            <div class="logo-description subtitle is-5">Handmade Wedding Veils and Accessories</div>

        </a>
    </header>
    <nav class="col-sm-5">
        <button class="nav-item my-work-btn is-size-4">My Work</button>
        <button class="nav-item contact-btn is-size-4">Contact Me</button>
        <button class="nav-item about-me-btn is-size-4">About Me</button>
    </nav>
</div>


<script>
    let prevScrollpos = window.pageYOffset;

    window.onscroll = function() {
        let currentScrollPos = window.pageYOffset;
        let navigation = document.querySelector('.navigation');

        if (prevScrollpos > currentScrollPos) {
            navigation.style.top = '0px';
        } else {
            navigation.style.top = '-40vh';
        }
        prevScrollpos = currentScrollPos;


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
    };


    let myWorkBtn = document.querySelector('.my-work-btn');
    let contactBtn = document.querySelector('.contact-btn');
    let aboutMeBtn = document.querySelector('.about-me-btn');

    myWorkBtn.onclick = function() {
        document.querySelector('.carousel-slider').scrollIntoView ({
            behavior: 'smooth'
        });
    };

    contactBtn.onclick = function() {
        document.querySelector('.contact').scrollIntoView ({
            behavior: 'smooth'
        });
    };

    aboutMeBtn.onclick = function() {
        document.querySelector('.about-content').scrollIntoView ({
            behavior: 'smooth'
        });
    };

</script>
